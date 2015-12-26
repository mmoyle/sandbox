require './lib/user'
require './lib/game'

class Monitor

  def initialize(maxInt)
    @game = Game.new(maxInt)
    @user = User.new
  end

  def play
    while @ans != 'q' do
      puts "ans #{@ans}"

      @game.setup()

      puts "What is #{@game.term1} x #{@game.term2} ? (q to quit)"
      print "> "
      @ans = $stdin.gets.chomp

      if @ans == 'q' 
        next
      end
      @ans = @ans.to_i

      if @game.checkAnswer()
        puts "Correct!"
      else 
        puts "Sorry, the answer is  #{@game.product}"
      end
    end

  end


end
