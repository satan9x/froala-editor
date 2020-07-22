# froala-editor
integrate froala editor with laravel 

## Installation
- run command `composer require kinghip/froala-editor:dev-master`
- add service provider to config/app.php `Kinghip\FroalaEditor\FroalaEditorServiceProvider::class,`
- run `php artisan vendor:publish`

## Config
add you upload image url  and remove image url in config/froala.php

## Usage 
- call assets `<?= \Kinghip\FroalaEditor\Froala::initCss()?>

<?= \Kinghip\FroalaEditor\Froala::initJs()?>`

- init editor using `<?= \Kinghip\FroalaEditor\Froala::initEditor("name",'id', 'content', $is_required=true)?>`


## Support
 for any questions contact me at : `ngovihai.it@ymail.com`
