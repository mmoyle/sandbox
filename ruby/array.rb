#!/usr/bin/ruby

a = [1, 'cat', 3.14]

puts a[0]

a[2] = nil

a[2]

print a 
print "\n"

# like perl can set words
a = %w{ ant bee cat dog elk }

puts print a


# like perl hash
section = {
  'cello'     => 'string',
  'clarinet'  => 'woodwind',
  'drum'      => 'percussion',
  'oboe'      => 'woodwind',
  'trumpet'   => 'brass',
  'violin'    => 'string'
}

puts section['cello']

puts section['trombone'] #nil

histogram = Hash.new(0) # default val is 0

puts histogram['a']

histogram['a'] = histogram['a'] + 1

puts histogram['a']

a.each 	{ |animal|  puts animal}


