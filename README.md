# SwipeStripe Gallery Module

## Maintainer Contact
SwipeStripe  
[Contact Us](http://swipestripe.com/support/contact-us)

## Requirements
* SilverStripe 3.1.*
* SwipeStripe 2.1.*
* Gallery 1.0.*

## Documentation
Display product photos in a slideshow and lightbox using AnythingSlider and Fancybox.

Thumbnails are generated that interact with the slideshow. Anything slider is 
[incredibly flexible with support for numerous effects and styles](https://github.com/ProLoser/AnythingSlider/wiki). 

You are required to [purchase a licence for Fancybox](http://fancyapps.com/fancybox/#license) for commercial websites.

This code can be used as a basic example for implementing different Javascript lightboxes and sliders.

## Installation Instructions
1. Place this directory in the root of your SilverStripe installation, rename the folder 'swipestripe-gallery'.
2. Visit yoursite.com/dev/build?flush=1 to rebuild the database.
3. Edit products and save a product with more than one image.
4. Copy the product template in templates/Layout/Product.ss to the corresponding location in your theme folder.
5. Flush the cache and view the product.

## Attribution
This extension uses:
* [jQuery](http://jquery.com)
* [AnythingSlider](http://css-tricks.com/anythingslider-jquery-plugin/) [Licence](https://github.com/ProLoser/AnythingSlider/blob/master/license.txt)
* [Fancybox](http://fancyapps.com/fancybox/) [Licence](http://fancyapps.com/fancybox/#license)

## License
	Copyright (c) 2011 - 2013, Frank Mullenger
	All rights reserved.

	Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

			* Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
			* Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the 
				documentation and/or other materials provided with the distribution.
			* Neither the name of SilverStripe nor the names of its contributors may be used to endorse or promote products derived from this software 
				without specific prior written permission.

	THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE 
	IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE 
	LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE 
	GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, 
	STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY 
	OF SUCH DAMAGE.