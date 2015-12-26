#!/usr/bin/ruby


class Song
  @@plays = 0	
  attr_reader :name, :artist, :duration, :plays
  attr_writer :duration
  def initialize(name, artist, duration)
    @name     = name
    @artist   = artist
    @duration = duration
    @plays = 0
  end

  def durationInMinutes
  	@duration / 60.0
  end
  def durationInMinutes=(minutes)
  	@duration = minutes * 60
  end

  def play
  	@@plays += 1
  	@plays += 1
  	puts "This song have been played: #{@plays} Total: #{@@plays}"
  end
  def to_s
    "Song: #{@name}--#{@artist} (#{@duration})"
  end
end

class KaraokeSong < Song
  def initialize(name, artist, duration, lyrics)
    super(name, artist, duration)
    @lyrics = lyrics
  end

  def to_s
  	super + " [#{@lyrics}]"
  end 
end


class SongList
  MaxTime = 5*60           #  5 minutes
  def SongList.isTooLong(aSong)
    return aSong.duration > MaxTime
  end
end


aSong = KaraokeSong.new("Bicylops", "Fleck", 260, "And now the...")
puts aSong.inspect

puts aSong.to_s

puts aSong.name
puts aSong.artist
puts aSong.duration

aSong.duration = 42	
puts aSong.duration

puts aSong.durationInMinutes
aSong.durationInMinutes = 90
puts aSong.duration
puts aSong.durationInMinutes

aSong.play
aSong.play

bSong = KaraokeSong.new("Bicylops", "Fleck", 260, "And now the...")
bSong.play
bSong.play

song1 = Song.new("Bicylops", "Fleck", 260)
song2 = Song.new("The Calling", "Santana", 468)

puts SongList.isTooLong(song1)
puts SongList.isTooLong(song2)
