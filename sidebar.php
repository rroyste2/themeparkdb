<script type="text/javascript" language="JavaScript">
function toggle(element){
	var ele = document.getElementById(element)
	if(ele.style.display == ''){
		ele.style.display = none;
	}
	if(ele.style.display == 'none'){
		ele.style.display = '';
	}
}
</script>
<div class="sidebar">
            <ul>	
               <li>
                    <a href="#" onclick="toggle('container')"><h4><span>Our <strong>Pages</strong></span></h4></a>
                    <ul class="blocklist" id="container">
			<li><a href="index.php">Home</a></li>
                        <li><a href="parks.php">Parks</a></li>
                        <li><a href="rides.php">Rides</a></li>
                        <li><a href="#">search parks</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
              </li>
                
                <li>
                    <a href="#" onclick="toggle('about')"><h4><span>About <strong>Us</strong></span></h4></a>
                    <ul style="display: none" id="about">
                        <li>
                        	<p style="margin: 0;">Themepark database is a comprehensive guide to theme parks and rides within the united states.</p>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="#" onclick="toggle('usercp')"><h4 class="h4"><span>User <strong>Account</strong></span></h4></a>
                    <ul style="display: none" id="usercp">
                        <li><a href="login.html"><strong>Login</strong></a> - Login to your account here at <strong>themeparkDatabase</strong></li>
                        <li><a href="register.html"><strong>Create Account</strong></a> - Create an account if you don't alreaedy have one</li>
                        
                    </ul>
                </li>
                
            </ul> 
        </div>
