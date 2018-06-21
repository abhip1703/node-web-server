<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
	<div class="nav-outer">
		<ul class="nav navbar-nav">
			<li class="active dropdown yamm-fw">
				<a href="index.php" data-hover="dropdown" class="dropdown-toggle">Home</a>

			</li>
			<!-- <li class="dropdown yamm-fw">
				<a href="../index.html#1" data-hover="dropdown" class="dropdown-toggle">About Us</a>

			</li>
			<li class=" dropdown yamm-fw">
				<a href="../index.html#2" data-hover="dropdown" class="dropdown-toggle">Gallery</a>

			</li>
			<li class=" dropdown yamm-fw">
				<a href="../index.html#3" data-hover="dropdown" class="dropdown-toggle">Events</a>

			</li>
			<li class=" dropdown yamm-fw">
				<a href="../index.html#6" data-hover="dropdown" class="dropdown-toggle">Contact Us</a>

			</li> -->
           <?php $sql=mysqli_query($con,"select id,name,link  from pages limit 6");
while($row=mysqli_fetch_array($sql))
{
    ?> 

			<li class="dropdown yamm">
				<a href="../index.html#<?php echo $row['id'];?>"> <?php echo $row['name'];?></a>

			</li>
			<?php } ?>


		</ul><!-- /.navbar-nav -->
		<div class="clearfix"></div>
	</div>
</div>


            </div>
        </div>
    </div>
</div>
