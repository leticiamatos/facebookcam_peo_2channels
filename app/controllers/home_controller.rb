class HomeController < ApplicationController

	def index
		render :action => 'video'
	end

	def video
	end

	def video_02
	end

	def video_mesaredonda
		@id = params[:id].blank? ? 1 : params[:id].to_i

		if @id > 2 || @id < 1
			@id = 1
			@other_id = 2
		end

		@other_id = 1 if @id == 2
		@other_id = 2 if @id == 1

		@channel = 4 if @id == 1
		@channel = 6 if @id == 2
	end

	def video_ultimotreino
	end
end
