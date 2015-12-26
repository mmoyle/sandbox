#!/usr/bin/ruby

require './factors'

while 1
  puts "Enter a number to be factored ? Ctrl-d to quit."
  print "> "
  product = $stdin.gets.chomp

  f = Factors.new()

  puts f.factorize(product)
end