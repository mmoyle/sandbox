#!/usr/bin/ruby

require 'json'

# sandbox

default = {
  'server' => {
      'img_urls' => ['http://s3-eu-west-1.amazonaws.com/bam-dev-assets/img', 'http://s3-eu-west-1.amazonaws.com/bam-de-dev-assets/img' ]
    }
  }

puts default['server']['img_urls']


puts default.to_json

puts JSON.pretty_generate(default)

