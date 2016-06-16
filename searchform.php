<div class="searchform" title="">
    <form method="get"  action="<?php echo home_url( '/' ); ?>"> 
		
        <input type="text" value="<?php echo $search_text; ?>" class='searchtxt' 
            name="s" id="s"  onblur="if (this.value == '')  {this.value = '<?php echo $search_text; ?>';}"  
            onfocus="if (this.value == '<?php echo $search_text; ?>') {this.value = '';}" 
        />
		<input type='submit' value='' class='searchbtn' />
		<div style='clear:both'></div>
    </form>
</div><!-- #search -->