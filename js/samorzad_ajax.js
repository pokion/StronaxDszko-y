$(document).ready(function()	{
	let firstTime = true;
	loadCarousel();
		$("select[name=year]").on('change', loadCarousel);

function loadCarousel(){
	let rok

			if(firstTime===true){
				rok = $('select[name=year]').find('option:selected').text();
				$('.rok').text(rok);
			}else if(firstTime===false){
				//var which contains year choosen in <select> (second time)
				rok =$(this).find('option:selected').text();
				// sets current year into span
				$('.rok').text(rok);
				// ajax connection
			}
			$.ajax({
		    		url : 'samorzad_getyear.php',
		        method : "POST",
		        data : {
							year : rok
						},
						dataType : "json"
					})

			//Jeśli zadziała:
			.done(function(data){
				let content;

				$.each(data, function(index, element){
						content += '<div class="samoOsoba">'
						content += '		<img class="tooltipped samoPhoto" data-position="top" data-tooltip="'+data[index].nazwa+'" src="'+data[index].img+'">'
						content += '		<p class="samoImie">'+data[index].imie+'<br>'
						content += '		'+data[index].klasa+'</p>'
						content += '</div>'
									
						let withoutUnd = content.split('undefined');
						
				$('.tutajWstaw').html(withoutUnd[1]);
				})

				 $('.tooltipped').tooltip();
				})

			//Jeśli nie zadziała
			.fail(function() {
					alert("Wystąpił błąd w połączeniu");
			})
	}
})
