<?php /* Template Name: Sync */  ?>

<?php get_header(); ?>

<div>
<?php  
$x = 1;
$y=1;
do {
	$url = "https://jobs.github.com/positions.json?page=" . $x;
    $response = wp_remote_get( $url,
    array(
        'timeout'     => 120,
    )
);
    $requeststat = wp_remote_retrieve_body($response);
    $reqestarray = json_decode($requeststat, true);
    ?>

    <?php  
	$counter = count($reqestarray);
    for ($i = 0; $i <= $counter ; $i++) 
	{   
		 $id = $reqestarray[$i][id];

		 $type = $reqestarray[$i][type];

		 $url = $reqestarray[$i][url];

		 $created_at = $reqestarray[$i][created_at];

		 $company = $reqestarray[$i][company];

		 $company_url = $reqestarray[$i][company_url];

		 $title = $reqestarray[$i][title];

		 $description = $reqestarray[$i][description];
 
		 $how_to_apply = $reqestarray[$i][how_to_apply];

		 $company_logo = $reqestarray[$i][company_logo];

		 global $wpdb;
		 $wpdb->insert('wp_jobdb', array( 'id' => $id,'type' => $type, 'url' => $url, 'created_at' => $created_at, 'company' => $company, 'company_url' => $company_url, 'title' => $title, 'description' => $description, 'how_to_apply' => $company_url, 'company_logo' => $company_logo));   
	}
	print_r($counter);
	if($counter - 0)
	{
		$y++;
	}else{
		?><H3> Database Updated Successfully </h3> <?php
	}

  $x++;
} while ($x <= $y);
    ?>
    </table>
    
    
        
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>