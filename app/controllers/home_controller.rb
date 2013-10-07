class HomeController < ApplicationController

	def index
		#if Time.now.saturday?
			video_ultimotreino
		#else
		#	video_mesaredonda
		#end
	end

	def video_mesaredonda
		@id = 1
		@id = params[:id].to_i unless params[:id].blank?

		@other_id = 1
		@other_id = 2 if @id == 1
		
		@channel = 4
		@channel = 6 if @id == 2

		respond_to do |format|
			format.html{ render 'video_mesaredonda' }
		end
	end

	def video_ultimotreino
		respond_to do |format|
			format.html{ render 'video_ultimotreino' }
		end
	end

end
