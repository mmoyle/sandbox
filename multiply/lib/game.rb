class Game
    
  attr_reader :term1, :term2, :product
  def initialize(maxInt)
    @maxInt = maxInt
  end

  def setup
    @term1 = 1 + rand(@maxInt)
    @term2 = 1 + rand(@maxInt)
    @product = term1 * term2
  end


  def checkAnswer
    # (!) compares type too
    if ( @ans == @product ) 
      return true
    else
      return false
    end
  end
  
end