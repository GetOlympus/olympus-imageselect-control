<p align="center">
    <img src="https://img.icons8.com/nolan/2x/checklist.png">
</p>

# Image Select Control
> This component is a part of the [**Olympus Zeus Core**][zeus-url] **WordPress** framework.

[![Olympus Component][olympus-image]][olympus-url]
[![CodeFactor Grade][codefactor-image]][codefactor-url]
[![Packagist Version][packagist-image]][packagist-url]

## Installation

Using `composer` in your PHP project:

```sh
composer require getolympus/olympus-imageselect-control
```

## Control initialization

Use the following lines to add a `image select control` in your **WordPress** customizer:

```php
$wp_customize->add_setting('my_imageselect_control_id',[
    'default'           => 'dave',
    'transport'         => 'refresh',
    'sanitize_callback' => 'custom_text_sanitization'
]);

$wp_customize->add_control(new ImageSelect($wp_customize, 'my_imageselect_control_id', [
    'label'       => 'Select a Minion that you may know',
    'description' => 'A very important question! Pay attention to it ;)',
    'multiple'    => false,
    'section'     => 'my_custom_controls_section',
    'choices'     => [
        'kevin' => [
            'label' => 'Kevin',
            'image' => 'https://vignette.wikia.nocookie.net/despicableme/images/1/1d/Kevin_minions.png/revision/latest/scale-to-width-down/350?cb=20170703052012',
        ],
        'mel'   => [
            'label' => 'Mel',
            'image' => 'https://vignette.wikia.nocookie.net/despicableme/images/2/2e/Mel_Minion_01.png/revision/latest/scale-to-width-down/350?cb=20160717135212',
        ],
        'dave'  => [
            'label' => 'Dave',
            'image' => 'https://vignette.wikia.nocookie.net/despicableme/images/7/71/Daveholdingcupcake.png/revision/latest/scale-to-width-down/350?cb=20130717145735',
        ],
        'bob'   => [
            'label' => 'Bob',
            'image' => 'https://vignette.wikia.nocookie.net/despicableme/images/c/ca/Bob-from-the-minions-movie.jpg/revision/latest/scale-to-width-down/350?cb=20151224154354',
        ],
    ],
]));
```

## How-to

### Variables definition

The variables definition depends on `multiple` value:
- set to `false`, a uniq string value is stored in Database
- set to `true`, an array of key values is stored in Database

### Usages

`add_control($id, $args);`

### Parameters

| Variable      | Type    | Default value if not set | Description     |
| ------------- | ------- | ------------------------ | --------------- |
| `$id`         | String  | *empty* (required)       | The id of the Setting associated with this Control. |
| `$args`       | Array   | *empty* (required)       | An associative array containing arguments for the setting. |

### `$args` arguments

| Variable      | Type    | Default value if not set | Description     |
| ------------- | ------- | ------------------------ | --------------- |
| `label`       | String  | *empty* (optional)       | The label that will be displayed. |
| `description` | String  | *empty* (optional)       | The description to display under the label. |
| `multiple`    | Boolean | `false` (optional)       | The setting to let user select one or multiple choices. |
| `section`     | String  | *empty* (required)       | The Section where there control should appear. |
| `choices`     | Array   | *empty* (required)       | The list of choices with uniq keys. |

The `choices` argument is an associative array containing a list of keys.  
Each key is associated to an array, composed by:
- `label` (required). Name of the choice
- `image` (required). URL of the image

## Release History

* 0.0.1
- [x] **INITIAL RELEASE**

## Authors and Copyright

Achraf Chouk  
[![@crewstyle][twitter-image]][twitter-url]

Please, read [LICENSE][license-blob] for more information.  
[![MIT][license-image]][license-url]

<https://github.com/crewstyle>  
<https://fr.linkedin.com/in/achrafchouk>

## Contributing

1. Fork it (<https://github.com/GetOlympus/olympus-imageselect-control/fork>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request

---

**Built with ♥ by [Achraf Chouk](http://github.com/crewstyle "Achraf Chouk") ~ (c) since a long time.**

<!-- links & imgs dfn's -->
[olympus-image]: https://img.shields.io/badge/for-Olympus-44cc11.svg?style=flat-square
[olympus-url]: https://github.com/GetOlympus
[zeus-url]: https://github.com/GetOlympus/Zeus-Core
[codefactor-image]: https://www.codefactor.io/repository/github/GetOlympus/olympus-imageselect-control/badge?style=flat-square
[codefactor-url]: https://www.codefactor.io/repository/github/getolympus/olympus-imageselect-control
[getoption-url]: https://developer.wordpress.org/reference/functions/get_option/
[license-blob]: https://github.com/GetOlympus/olympus-imageselect-control/blob/master/LICENSE
[license-image]: https://img.shields.io/badge/license-MIT_License-blue.svg?style=flat-square
[license-url]: http://opensource.org/licenses/MIT
[packagist-image]: https://img.shields.io/packagist/v/getolympus/olympus-imageselect-control.svg?style=flat-square
[packagist-url]: https://packagist.org/packages/getolympus/olympus-imageselect-control
[twitter-image]: https://img.shields.io/badge/crewstyle-blue.svg?style=social&logo=twitter
[twitter-url]: http://twitter.com/crewstyle