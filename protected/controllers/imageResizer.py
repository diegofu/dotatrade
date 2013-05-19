from PIL import Image
from sys import argv
import glob
import os


# if len(argv) is not 4:
# 	print 'need more args'
# 	return





'argv1 is the path, argv2 is the width, argv3 is the height, argv4 is the name to be added'

os.chdir(argv[1])

for files in glob.glob('*.png'):
	# image = open(+argv[1] + files, 'r')

	# thumbnail = open('../../'+argv[1] + os.path.splitext(files)[0] + '_' + argv[4] + '.png', 'w')


	im = Image.open('../'+argv[1] + files)

	size = int(argv[2]), int(argv[3])
	

	try:
		im.thumbnail(size, Image.ANTIALIAS)
		im.save('../'+argv[1] +'/'+os.path.splitext(files)[0] + '_' + argv[4] + '.png')
	except IndexError:
		print 'cannot create image for', files
		continue

	