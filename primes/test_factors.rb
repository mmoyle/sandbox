#!/usr/bin/ruby 

require './factors'
require 'test/unit'

class TestFactors < Test::Unit::TestCase

  def test_factorize
    f = Factors.new()
    assert_equal([3], f.factorize(3))
  end

end