from bs4 import BeautifulSoup
import urllib2
import urllib
import re
import urlparse
import json
from PIL import Image




log = open('protected/images/items/log.txt', 'w')

def getImage(item_number):
	no_image_items = []
	no_thumbnail_items = []
	page = urllib2.urlopen('http://www.dota2.com/store/itemdetails/' + item_number, timeout = 60).read()
	html = BeautifulSoup(page)

	previewContainer = html.find('div', attrs = {'id':'PreviewImage'})
	if previewContainer is None:
		print item_number + ' has no image'
		log.write(item_number + ' has no image\n')
		return
	imageUrl = previewContainer.find('img')['src']

	f = open('protected/images/items/' + item_number + '.png', 'w')
	image = urllib.urlopen(imageUrl).read()
	f.write(image)
	f.close()
	im = Image.open('protected/images/items/' + item_number + '.png')
	width, height = im.size

	try:
		size = width/10, height/10

		im.thumbnail(size, Image.ANTIALIAS)
		im.save('protected/images/items/' + item_number + '_thumbnail_small.png')

		size = width/5, height/5
		im.thumbnail(size, Image.ANTIALIAS)
		im.save('protected/images/items/' + item_number + '_thumbnail_big.png')	
	except IndexError:
		print item_number + ' cannot create a thumbnail'
		log.write(item_number + ' cannot create a thumbnail\n')
		return 

try:
	f = open('json.txt', 'r')
	item_json = json.loads(f.read())
	f.close()
except IOError:
	print 'Could not find json.txt'

for key, value in item_json['items_game']['items'].iteritems():
	if not key.isdigit():
		pass
	getImage(key)

log.close()
