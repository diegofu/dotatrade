from bs4 import BeautifulSoup
import urllib2
import urllib
import re
import urlparse
import json
from PIL import Image
import os.path



url = 'http://www.dota2.com/heroes/'

def getHeroLink():
	try:
		overall_page = urllib2.urlopen(url).read()
		overall_html = BeautifulSoup(overall_page)
		hero_links = overall_html.findAll('a', attrs = {'class':'heroPickerIconLink'})
		return hero_links
	except urllib2.HTTPError:
		print 'cannot find links'
		return None


def getImages(hero_links):

	for link in hero_links:
		if link is None:
			return None
		try:
			hero_page = urllib2.urlopen(link['href']).read()
		except urllib2.HTTPError:
			print 'cannot open hero page', link
			return None
		hero_html = BeautifulSoup(hero_page)
		image_link = hero_html.find('img', attrs = {'id':'heroTopPortraitIMG'})['src']
		hero_name = hero_html.find('h1').text
		if image_link is None or hero_name is None:
			print 'cannot crawl ' + link
			return None
		hero_name = '_'.join(hero_name.lower().split())
		hero_image = urllib.urlopen(image_link).read()
		try:
			image = open('images/heroes/'+hero_name+'.png', 'w')
		except urllib2.HTTPError:
			print 'cannot open hero image', hero_name
			return None
		try:
			image.write(hero_image)
			image.close()
		except IOError:
			print 'cannot store image', hero_name
			return None


hero_links = getHeroLink()

getImages(hero_links)




