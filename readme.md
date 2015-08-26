# Kirby custom country field

Custom country select field for kirby. [Countries used](https://www.iso.org/obp/ui/#search) (select ‘Country codes’).

## Installation

`git submodule add https://github.com/iksi/KirbyCountryField.git site/fields/country`  
Or place a `country` folder in `/site/fields` with the repository’s contents.

## Usage

You can define the country field in your blueprint as follows:

```YAML
country:
  label: Country
  type: country
  format: code
  default: Belgium
```

As format you can either use code or name which determins whether the country’s iso code or name is being used as a the value that will be stored.

### Future

Converting this into a field with a `datalist` as soon as [Safari supports](http://caniuse.com/#search=datalist) them.