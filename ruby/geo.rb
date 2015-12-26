#!/usr/bin/ruby




def geo(startTerm, ratio, n)

  puts "geometric series until #{n}"

  term = startTerm
  for i in 1..n do 
    val = term * ratio
    print "#{val}, "
    term = val
  end

puts

end


geo(1,2,10)
