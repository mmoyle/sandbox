require './super_memo'
require 'test/unit'

class TestSuperMemo < Test::Unit::TestCase

  def test_getInterval
    sm = SuperMemo.new
    assert_equal(1, sm.getInterval())
    
  end


end