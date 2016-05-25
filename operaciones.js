$(document).ready(function()
{
	
		$('#envia').click(function()
		{
			//j
			var user = $('.usuario').val();
			var pass = $('.passwor').val();
			
			if(user !='' && pass !='')
			{
				$.ajax({});
				url: '../login.php',
				method: 'POST',
				data: {usuario: user, passwor: pass},
				sucess: function(msg)
				{ 
					if(msg=='1')
					{
						$('#mensaje').html('los datos son incorrectos');
					}
					else
					{
						window.location = msg;
					}
				}
				
			}
			else
			{
				$('#mensaje').html('ingrese los datos');
			}
		
		});
	
});