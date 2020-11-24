<?php /* Template Name: Jobs1 */  ?>

<?php get_header(); ?>

<div>
  

<table>
  <tbody>
<tr>
<td>Job Description</td> 
<td>Job Type</td> 
<td>Date of Posting</td>
<td>Company Name</td>
<td>Description & Apply</td>
</tr>		 
			
		<?php
		if( isset($_GET['title']) ) {
			$paged1 = $_GET['title'];
			?>
			<h2> Search by Title : <?php echo $paged1 ;?></h2> 
			<?php
			global $wpdb;
			$result = $wpdb->get_results ( "SELECT id,type,url,created_at,company,company_url,title,how_to_apply,company_logo FROM wp_jobdb WHERE title LIKE '%{$paged1}%'"  );
			foreach ( $result as $printr ) { ?>
			<tr>
			<td><strong><a href="<?php echo $printr->url;?>" class="titlejb"><?php echo $printr->title;?></a></strong></td>
			<td><?php echo $printr->type;?></td>
			<td><?php echo $printr->created_at;?></td>
			<td><strong><a href="<?php echo $printr->company_url;?>" class="titlejb"><img src="<?php echo $printr->company_logo;?>" alt="<?php echo $printr->company_url;?>" id="imgpmalogo"><span><?php echo $printr->company;?></span></a></strong></td>
			<td><span><strong><a href="<?php echo $printr->url;?>" class="buttondis"><span>Descreption</span></a></strong></span>
			<strong><a href="<?php echo $printr->how_to_apply;;?>" class="buttondis"><span>Apply</span></a></td>
			</tr>
			<?php } 
		} else if( isset($_GET['location']) ) {
			$paged1 = $_GET['location'];
			?>
			<h2> Search by Location : <?php echo $paged1 ;?></h2> 
			<?php
			global $wpdb;
			$result = $wpdb->get_results ( "SELECT id,type,url,created_at,company,company_url,title,how_to_apply,company_logo FROM wp_jobdb WHERE description LIKE '%{$paged1}%'"  );
			foreach ( $result as $printr ) { ?>
			<tr>
			<td><strong><a href="<?php echo $printr->url;?>" class="titlejb"><?php echo $printr->title;?></a></strong></td>
			<td><?php echo $printr->type;?></td>
			<td><?php echo $printr->created_at;?></td>
			<td><strong><a href="<?php echo $printr->company_url;?>" class="titlejb"><img src="<?php echo $printr->company_logo;?>" alt="<?php echo $printr->company_url;?>" id="imgpmalogo"><span><?php echo $printr->company;?></span></a></strong></td>
			<td><span><strong><a href="<?php echo $printr->url;?>" class="buttondis"><span>Descreption</span></a></strong></span>
			<strong><a href="<?php echo $printr->how_to_apply;;?>" class="buttondis"><span>Apply</span></a></td>
			</tr>
			<?php } 
		} else {
			global $wpdb;
			$result = $wpdb->get_results ( "SELECT id,type,url,created_at,company,company_url,title,how_to_apply,company_logo FROM wp_jobdb" );
			foreach ( $result as $printr ) { ?>
			<tr>
			<td><strong><a href="<?php echo $printr->url;?>" class="titlejb"><?php echo $printr->title;?></a></strong></td>
			<td><?php echo $printr->type;?></td>
			<td><?php echo $printr->created_at;?></td>
			<td><strong><a href="<?php echo $printr->company_url;?>" class="titlejb"><img src="<?php echo $printr->company_logo;?>" alt="<?php echo $printr->company_url;?>" id="imgpmalogo"><span><?php echo $printr->company;?></span></a></strong></td>
			<td><span><strong><a href="<?php echo $printr->url;?>" class="buttondis"><span>Descreption</span></a></strong></span>
			<strong><a href="<?php echo $printr->how_to_apply;;?>" class="buttondis"><span>Apply</span></a></td>
			</tr>
			<?php } 
		}
		?>
	
</tbody>
</table>
    
    
        
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>