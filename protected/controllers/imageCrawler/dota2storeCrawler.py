from bs4 import BeautifulSoup
import urllib2
import urllib
import re
import urlparse
import json
from PIL import Image
import os.path



optf2 = 'http://optf2.com/d2/item/'
log = open('images/items/log.txt', 'w')
open('images/items/descriptions.txt', 'w')
item_description_file = open('images/items/descriptions.txt', 'r+')
item_descriptions = item_description_file.read()
dota2store = 'http://www.dota2.com/store/itemdetails/'

empty_image = 'http://media.steampowered.com/apps/570/icons/econ/testitem_slot_empty_large.b6957dfef6cc64f6d6553435c0d17895117c5222.png'
def getImage(item_number):

	filename = 'images/items/' + item_number + '.png'

	try:
		optf2_page = urllib2.urlopen(optf2+item_number, timeout = 30).read()
	except urllib2.HTTPError:
		print 'cannot find item image ' + item_number + ' in optf2'
		log.write(item_number + ' has no image\n')
		return
	optf2_html = BeautifulSoup(optf2_page)

	item_stats = optf2_html.find('div', attrs = {'id':'item_stats'})

	if item_stats is None:
		print 'cannot find item image ' + item_number + ' in optf2'
		log.write(item_number + ' has no image\n')
		return

	imageUrl = item_stats.find('img', attrs = {'class':'item-image'})
	description = item_stats.find('div', attrs = {'class':'item-description'})
	
	if imageUrl is not None and imageUrl['src'] is not empty_image:
		if not os.path.isfile(filename):
			f = open(filename, 'w')
			try:
				image = urllib.urlopen(imageUrl['src']).read()
				f.write(image)
				f.close()
			except urllib2.HTTPError:
				print 'cannot find item image ' + item_number + ' in optf2'
				log.write(item_number + ' has no image\n')
	if description is not None:
		if description.text not in item_descriptions:
			item_description_file.write( '{:<5} {}\n'.format(item_number, description.text) )
			print description.text
	
	# if previewContainer is None:
	# 	print 'cannot find item image ' + item_number + ' in dota 2 store'

	# 	'then we are going to crawl the optf2'
		
	# 	page = urllib2.urlopen(optf2 + item_number, timeout = 60).read()


	# 	log.write(item_number + ' has no image\n')
	# else:
		
	# 	if descriptionContainer is not None:
	# 		# description = descriptionContainer.find('p', attrs = {'class':'Description'})
	# 		print descriptionContainer, item_number

	# 	if(os.path.isfile(filename)): return


	# 	imageUrl = previewContainer.find('img')['src']
	# 	f = open(filename, 'w')
	# 	image = urllib.urlopen(imageUrl).read()
	# 	f.write(image)
	# 	f.close()


	# im = Image.open('protected/images/items/' + item_number + '.png')
	# width, height = im.size

	# try:
	# 	size = width/10, height/10

	# 	im.thumbnail(size, Image.ANTIALIAS)
	# 	im.save('protected/images/items/' + item_number + '_thumbnail_small.png')

	# 	size = width/5, height/5
	# 	im.thumbnail(size, Image.ANTIALIAS)
	# 	im.save('protected/images/items/' + item_number + '_thumbnail_big.png')	
	# except IndexError:
	# 	print item_number + ' cannot create a thumbnail'
	# 	log.write(item_number + ' cannot create a thumbnail\n')
	# 	return 

try:
	f = open('json.txt', 'r')
	item_json = json.loads(f.read())
	f.close()
except IOError:
	print 'Could not find json.txt'

for key, value in item_json['items_game']['items'].iteritems():
	if not key.isdigit():
		pass
	try:
		getImage(key)
	except Exception:
		log.write('problem crawling item ' + key + '\n\n')




log.close()
# item_descriptions.close()







