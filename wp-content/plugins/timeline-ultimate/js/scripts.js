
jQuery(document).ready(function($)
	{
		



	jQuery(".load-more").click(function()
			{	

				$(this).addClass("loading");
				var themes = $(this).attr("themes");
								
				var timeline_id = parseInt($(this).attr("timeline_id"));
				var per_page = parseInt($(this).attr("per_page"));
				var offset = parseInt($(this).attr("offset"));
				$(this).html("<span>loading...</span>");

				var oddeven = $(".timeline_um-"+timeline_id+" li:last-child").attr("oddeven");

				$.ajax(
					{
				type: 'POST',
				url: timeline_um_ajax.timeline_um_ajaxurl,
				data: {"action": "timeline_um_body_ajax_"+themes,"timeline_id":timeline_id,"offset":offset,"oddeven":oddeven},
				success: function(data)
						{	
							$('.load-more').removeClass("loading");
							$('.load-more').html("<span>Load More</span>");
							//alert(data);
							$(".timeline_um-"+timeline_id).append(data);

							$('.load-more').attr("offset",(offset+per_page));
							
						}
					});
					
									

				
				
				  
		});




























		
		$(document).on('click', '.timeline_um_content_source', function()
			{	
				var source = $(this).val();
				var source_id = $(this).attr("id");
				
				$(".content-source-box.active").removeClass("active");
				$(".content-source-box."+source_id).addClass("active");
				
			})
		

		
		
		
		jQuery(".timeline_um_taxonomy").click(function()
			{
				
				var taxonomy = jQuery(this).val();
				
				jQuery(".timeline_um_loading_taxonomy_category").css('display','block');

						jQuery.ajax(
							{
						type: 'POST',
						url: timeline_um_ajax.timeline_um_ajaxurl,
						data: {"action": "timeline_um_get_taxonomy_category","taxonomy":taxonomy},
						success: function(data)
								{	
									jQuery(".timeline_um_taxonomy_category").html(data);
									jQuery(".timeline_um_loading_taxonomy_category").fadeOut('slow');
								}
							});

		
			})
		
	
 		

	});	







