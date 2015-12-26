#!/usr/bin/ruby

#
# fun with each
#


(0..5).each do |i|
   puts "Value of local variable is #{i}"
end


(6..10).each { |i| 
   puts "Value of local variable is #{i}"
 }
