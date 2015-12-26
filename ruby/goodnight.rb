#!/usr/bin/ruby

def sayGoodnight(name)
	#result = "Goodnight, " + name
	# like in perl last value is returned
	result = "Goodnight, #{name}"
	result = "Goodnight, %{first}" % {first: name}
	#return result
end 

puts sayGoodnight("John-Boy")
puts sayGoodnight("Mary-Ellen")