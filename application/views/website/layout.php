<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL()?>assets_website/layout/css/main.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="">
        <h4 class="pt-5 pl-5 ml-5">PLAN SHOWING THE PROPOSED RESIDENTIAL OPEN PLOTS<br> KNOWN AS "AC HOMES SITA GARDENS", PART OF SY.NO'S. 383 & 385<br> SITUATED AT GUDURU VILLAGE, KANDUKURU MANDAL,<br> REDDY DISTRICT</h4>
      <div class="map_layout position-relative">
        <span>
          <img src="<?php echo BASE_URL()?>assets_website/layout/images/layout.jpg">
        </span>
        
  
        <ul class="first_list clr list-unstyled">
         <!-- <a href="one.html"> -->
        <?php 
        $uarr=array();
          $uarr[0]="blog first_blog blog_padding_first red";
          $uarr[1]="blog blog1 blog_padding blue";
          $uarr[2]="blog blog2 blog_padding green";
          $uarr[3]="blog blog3 blog_padding yellow";
          $uarr[4]="blog blog4 blog_padding";
          $uarr[5]="blog blog5 blog_padding";
          $uarr[6]="blog blog6 blog_padding_bot";
          $uarr[7]="blog blog7 blog_width blog_padding";
          $uarr[8]="blog blog8 blog_width blog_padding";
          $uarr[9]="blog blog9 blog_width blog_padding";
          $uarr[10]="blog blog10 blog_width_higher blog_padding";
          
          $uarr[11]="blog blog11 blog_width_higher blog_padding";
          $uarr[12]="blog blog12 blog_width_higher blog_padding";
          $uarr[13]="blog blog13 blog_width_higher blog_padding";
          $uarr[14]="blog blog14 blog_width_higher blog_padding";
          $uarr[15]="blog blog15 blog_width_higher blog_padding";
          $uarr[16]="blog blog16 blog_width_higher blog_padding";
          $uarr[17]="blog blog17 blog_width_higher blog_padding";
          $uarr[18]="blog blog18 blog_width_higher blog_padding";
          $uarr[19]="blog blog19 blog_padding";
          $uarr[20]="blog blog20 blog_padding";
          
          $uarr[21]="blog blog21 blog_padding";
          $uarr[22]="blog blog22 blog_padding";
          $uarr[23]="blog blog23 blog_padding";
          $uarr[24]="blog blog24 blog_padding";
          $uarr[25]="blog blog25 blog_padding_high";
          $uarr[26]="blog blog26 blog_padding_high";
          $uarr[27]="blog blog27 blog_padding";
          $uarr[28]="blog blog28 blog_padding";
          $uarr[29]="blog blog29 blog_padding";
          $uarr[30]="blog blog30 blog_padding";
          
          $uarr[31]="blog blog31 blog_padding";
          $uarr[32]="blog blog32 blog_padding";
          $uarr[33]="blog blog33 blog_padding";
          $uarr[34]="blog blog34 blog_padding_low";
          $uarr[35]="blog blog35 blog_padding_low";
          
         /**** Next UL Array *****/
          
          $secound_list=array();
          
          $secound_list=array(
					"0"=>"blog blog_first secount_sec_pad-first",
					"1"=>"blog blog1 secount_sec_pad",
					"2"=>"blog blog2 secount_sec_pad",
					"3"=>"blog blog3 secount_sec_pad",
					"4"=>"blog blog4 secount_sec_pad",
					"5"=>"blog blog5 secount_sec_pad",
					"6"=>"blog blog6 secount_sec_pad",
					"7"=>"blog blog7 secount_sec_pad",
					"8"=>"blog blog8 secount_sec_pad",
					"9"=>"blog blog9 left_side secount_sec_pad",
					"10"=>"blog blog10 left_side secount_sec_pad",
					"11"=>"blog blog11 left_side secount_sec_pad",
					"12"=>"blog blog12 left_side secount_sec_pad",
					"13"=>"blog blog13 left_side secount_sec_pad",
					"14"=>"blog blog14 left_side secount_sec_pad",
					"15"=>"blog blog15 left_side secount_sec_pad",
					"16"=>"blog blog16 left_side secount_sec_pad",
					"17"=>"blog blog17 left_side secount_sec_pad"
					
          		);
          
          /******third_list  ******/
          $third_list=array();
          
          $third_list=array(
				"0"=>"blog blog_first third_sec_pad-first",
				"1"=>"blog blog1 third_sec_pad",
				"2"=>"blog blog2 third_sec_pad",	
				"3"=>"blog blog3 third_sec_pad",
				"4"=>"blog blog4 third_sec_pad",
				"5"=>"blog blog5 third_sec_pad",
				"6"=>"blog blog6 third_sec_pad",
				"7"=>"blog blog7 third_sec_pad",
				"8"=>"blog blog8 third_sec_pad",
				"9"=>"blog blog9 third_sec_pad",
				"10"=>"blog blog10 left_side third_sec_pad",
				"11"=>"blog blog11 left_side third_sec_pad",
				"12"=>"blog blog12 left_side third_sec_pad",
				"13"=>"blog blog13 left_side third_sec_pad",
				"14"=>"blog blog14 left_side third_sec_pad",
				"15"=>"blog blog15 left_side third_sec_pad",
				"16"=>"blog blog16 left_side third_sec_pad",
				"17"=>"blog blog17 left_side third_sec_pad",
				"18"=>"blog blog18 left_side third_sec_pad_high"

          		);
			/******third_list  ******/
          
          /******fourth_list  ******/
          $fourth_list=array();
          
          $fourth_list=array(
          "0"=>"blog blog1 forth_sec_pad-first",
          "1"=>"blog blog2 forth_sec_pad-first");
          /***** fourth  */
           if($plotData!=false) {
			
			$j=0;
           foreach ($plotData as $pinfo)
			{
				$class="";
				$plot="";$area="";$plot_id='';
				$plot=$pinfo->plot_no;
				$area=$pinfo->area; 
				$plot_id=$pinfo->plot_id;
				$class=$uarr[$j];
				
				/* if($i==1) {
					$class="blog first_blog blog_padding_first red";
				}
				else {
					$class="blog blog".$i." blog_padding blue";
				} */
           ?>
       	<a href="<?php echo BASE_URL()?>/ViewCustomerData/<?php echo $plot_id;?>"> 
        <!-- blog first_blog blog_padding_first red -->
            	<li class="<?=$class?>">
	          		<div class="number mx-auto text-center">
		                <p class="number_border m-0"><?php echo $plot;?></p>
		                <p class="m-0"><?php echo $area;?></p>
	            	</div>  
	            </li>
        	 </a> 
          <?php $j++;} }?>
          <!-- <li class="blog blog1 blog_padding blue">
            <div class="number mx-auto text-center">
                <p class="number_border m-0">35</p>
                <p class="m-0">502</p>
            </div>  
          </li>
          <li class="blog blog2 blog_padding green">
            <div class="number mx-auto text-center">
                <p class="number_border m-0">34</p>
                <p class="m-0">502</p>
            </div>  
          </li>
          <li class="blog blog3 blog_padding yellow">
            <div class="number mx-auto text-center">
                <p class="number_border m-0">33</p>
                <p class="m-0">502</p>
            </div>  
          </li>
          <li class="blog blog4 blog_padding">
            <div class="number mx-auto text-center">
                <p class="number_border m-0">32</p>
                <p class="m-0">502</p>
            </div>  
          </li>
          <li class="blog blog5 blog_padding">
            <div class="number mx-auto text-center">
                <p class="number_border m-0">31</p>
                <p class="m-0">502</p>
            </div>  
          </li>
          <li class="blog blog6 blog_padding_bot">
            <div class="number mx-auto text-center">
                <p class="number_border m-0">30</p>
                <p class="m-0">566</p>
            </div>
          </li>
          <li class="blog blog7 blog_width blog_padding">
            <div class="number mx-auto text-center">
                <p class="number_border m-0">29</p>
                <p class="m-0">501</p>
            </div>  
          </li>
          <li class="blog blog8 blog_width blog_padding">
            <div class="number mx-auto text-center">
                <p class="number_border m-0">28</p>
                <p class="m-0">501</p>
            </div>  
          </li>
          <li class="blog blog9 blog_width blog_padding">
            <div class="number mx-auto text-center">
                <p class="number_border m-0">27</p>
                <p class="m-0">501</p>
            </div>  
          </li>
          <li class="blog blog10 blog_width_higher blog_padding">
            <div class="number mx-auto text-center">
                <p class="number_border m-0">26</p>
                <p class="m-0">501</p>
            </div>  
          </li>
          
          
          <li class="blog blog11 blog_width_higher blog_padding">
            <div class="number mx-auto text-center">
                <p class="number_border m-0">25</p>
                <p class="m-0">501</p>
            </div>  
          </li>
          <li class="blog blog12 blog_width_higher blog_padding">
            <div class="number mx-auto text-center">
                <p class="number_border m-0">24</p>
                <p class="m-0">501</p>
            </div>  
          </li>
          <li class="blog blog13 blog_width_higher blog_padding">
            <div class="number mx-auto text-center">
                <p class="number_border m-0">23</p>
                <p class="m-0">501</p>
            </div>  
          </li>
          <li class="blog blog14 blog_width_higher blog_padding">
            <div class="number mx-auto text-center">
                <p class="number_border m-0">22</p>
                <p class="m-0">501</p>
            </div>  
          </li>
          <li class="blog blog15 blog_width_higher blog_padding">
            <div class="number mx-auto text-center">
                <p class="number_border m-0">21</p>
                <p class="m-0">501</p>
            </div>  
          </li>
            <li class="blog blog16 blog_width_higher blog_padding">
            <div class="number mx-auto text-center">
                <p class="number_border m-0">20</p>
                <p class="m-0">501</p>
            </div>  
          </li>
            <li class="blog blog17 blog_width_higher blog_padding">
            <div class="number mx-auto text-center">
                <p class="number_border m-0">19</p>
                <p class="m-0">500</p>
            </div>  
          </li>
            <li class="blog blog18 blog_width_higher blog_padding">
            <div class="number mx-auto text-center">
                <p class="number_border m-0">18</p>
                <p class="m-0">500</p>
            </div>  
          </li>
            <li class="blog blog19 blog_padding">
                <div class="number mx-auto text-center">
                <p class="number_border m-0">17</p>
                <p class="m-0">500</p>
            </div>
            </li>
            <li class="blog blog20 blog_padding">
                <div class="number mx-auto text-center">
                <p class="number_border m-0">16</p>
                <p class="m-0">500</p>
            </div>
            </li>
            
           
            
            <li class="blog blog21 blog_padding">
                <div class="number mx-auto text-center">
                <p class="number_border m-0">15</p>
                <p class="m-0">500</p>
            </div>
            </li>
            <li class="blog blog22 blog_padding">
                <div class="number mx-auto text-center">
                <p class="number_border m-0">14</p>
                <p class="m-0">500</p>
            </div>
            </li>
            <li class="blog blog23 blog_padding">
                <div class="number mx-auto text-center">
                <p class="number_border m-0">13</p>
                <p class="m-0">500</p>
            </div>
            </li>
            <li class="blog blog24 blog_padding">
                <div class="number mx-auto text-center">
                <p class="number_border m-0">12</p>
                <p class="m-0">500</p>
            </div>
            </li>
            <li class="blog blog25 blog_padding_high">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">11</p>
                    <p class="m-0">959</p>
                </div>
            </li>
            <li class="blog blog26 blog_padding_high">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">10</p>
                    <p class="m-0">961</p>
                </div>
            </li>
            <li class="blog blog27 blog_padding">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">09</p>
                    <p class="m-0">492</p>
                </div>
            </li>
            <li class="blog blog28 blog_padding">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">08</p>
                    <p class="m-0">489</p>
                </div>
            </li>
            <li class="blog blog29 blog_padding">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">07</p>
                    <p class="m-0">485</p>
                </div>
            </li>
            <li class="blog blog30 blog_padding">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">06</p>
                    <p class="m-0">482</p>
                </div>
            </li>
            
          
          
            <li class="blog blog31 blog_padding">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">05</p>
                    <p class="m-0">476</p>
                </div>
            </li>
            <li class="blog blog32 blog_padding">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">04</p>
                    <p class="m-0">474</p>
                </div>
            </li>
            <li class="blog blog33 blog_padding">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">03</p>
                    <p class="m-0">464</p>
                </div>
            </li>
            <li class="blog blog34 blog_padding_low">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">02</p>
                    <p class="m-0">349</p>
                </div>
            </li>
            <li class="blog blog35 blog_padding_low">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">01</p>
                    <p class="m-0">88888</p>
                </div>
            </li> -->
        </ul>
        
 
          <ul class="secound_list clr list-unstyled">
          <?php 
          /*if($plotData2!=false) {
			
			$k=0;
           foreach ($plotData2 as $pinfo)
			{
				$class2="";
				$plot2="";$area2="";$plot_id2='';
				$plot2=$pinfo->plot_no;
				$area2=$pinfo->area; 
				$plot_id2=$pinfo->plot_id;
				$class2=$secound_list[$k];
				
				/* if($i==1) {
					$class="blog first_blog blog_padding_first red";
				}
				else {
					$class="blog blog".$i." blog_padding blue";
				} */
           ?>
           	 
			<li class="blog blog_first secount_sec_pad-first">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">37</p>
                    <p class="m-0">263</p>
                </div>
              </li>
              <?php // $k++ ; }}?>
               <li class="blog blog1 secount_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">38</p>
                    <p class="m-0">267</p>
                </div>
              </li>
              <li class="blog blog2 secount_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">39</p>
                    <p class="m-0">267</p>
                </div>
              </li>
              <li class="blog blog3 secount_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">40</p>
                    <p class="m-0">267</p>
                </div>
              </li>
              <li class="blog blog4 secount_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">41</p>
                    <p class="m-0">267</p>
                </div>
              </li>
              <li class="blog blog5 secount_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">42</p>
                    <p class="m-0">267</p>
                </div>
              </li>
              <li class="blog blog6 secount_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">43</p>
                    <p class="m-0">267</p>
                </div>
              </li>
              <li class="blog blog7 secount_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">44</p>
                    <p class="m-0">267</p>
                </div>
              </li>
              <li class="blog blog8 secount_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">45</p>
                    <p class="m-0">267</p>
                </div>
              </li>
              <li class="blog blog9 left_side secount_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">46</p>
                    <p class="m-0">267</p>
                </div>
              </li>
              <li class="blog blog10 left_side secount_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">47</p>
                    <p class="m-0">267</p>
                </div>
              </li>
              <li class="blog blog11 left_side secount_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">48</p>
                    <p class="m-0">267</p>
                </div>
              </li>
              
              <li class="blog blog12 left_side secount_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">49</p>
                    <p class="m-0">267</p>
                </div>
              </li>
              <li class="blog blog13 left_side secount_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">50</p>
                    <p class="m-0">267</p>
                </div>
              </li>
              <li class="blog blog14 left_side secount_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">51</p>
                    <p class="m-0">267</p>
                </div>
              </li>
              <li class="blog blog15 left_side secount_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">52</p>
                    <p class="m-0">267</p>
                </div>
              </li>
              
					
              <li class="blog blog16 left_side secount_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">53</p>
                    <p class="m-0">267</p>
                </div>
              </li>
              <li class="blog blog17 left_side secount_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">54</p>
                    <p class="m-0">271</p>
                </div>
              </li> 
          </ul>
         
          
           <ul class="third_list clr list-unstyled">
            <?php 
            /*if($plotData3!=false) {
			
			$l=0;
           foreach ($plotData3 as $pinfo)
			{
				$class3="";
				$plot3="";$area3="";$plot_id3='';
				$plot3=$pinfo->plot_no;
				$area3=$pinfo->area; 
				$plot_id3=$pinfo->plot_id;
				$class3=$third_list[$l];
				
				/* if($i==1) {
					$class="blog first_blog blog_padding_first red";
				}
				else {
					$class="blog blog".$i." blog_padding blue";
				} */
           ?>
           	<li class="blog blog_first third_sec_pad-first">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">55</p>
                    <p class="m-0">212</p>
                </div>
               </li>
               <?php //$l++ ;}}?> 
              <li class="blog blog1 third_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">56</p>
                    <p class="m-0">200</p>
                </div>
               </li>
              <li class="blog blog2 third_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">57</p>
                    <p class="m-0">200</p>
                </div>
               </li>
              <li class="blog blog3 third_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">58</p>
                    <p class="m-0">200</p>
                </div>
               </li>
              <li class="blog blog4 third_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">59</p>
                    <p class="m-0">200</p>
                </div>
               </li>
              <li class="blog blog5 third_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">60</p>
                    <p class="m-0">200</p>
                </div>
               </li>
              <li class="blog blog6 third_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">61</p>
                    <p class="m-0">200</p>
                </div>
               </li>
              <li class="blog blog7 third_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">62</p>
                    <p class="m-0">200</p>
                </div>
               </li>
              <li class="blog blog8 third_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">63</p>
                    <p class="m-0">200</p>
                </div>
               </li>
              <li class="blog blog9 third_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">64</p>
                    <p class="m-0">200</p>
                </div>
               </li>
              <li class="blog blog10 left_side third_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">65</p>
                    <p class="m-0">200</p>
                </div>
               </li>
                

              <li class="blog blog11 left_side third_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">66</p>
                    <p class="m-0">200</p>
                </div>
               </li>
              <li class="blog blog12 left_side third_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">67</p>
                    <p class="m-0">200</p>
                </div>
               </li>
              <li class="blog blog13 left_side third_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">68</p>
                    <p class="m-0">200</p>
                </div>
               </li>
              <li class="blog blog14 left_side third_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">69</p>
                    <p class="m-0">200</p>
                </div>
               </li>
              <li class="blog blog15 left_side third_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">70</p>
                    <p class="m-0">200</p>
                </div>
               </li>
              <li class="blog blog16 left_side third_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">71</p>
                    <p class="m-0">200</p>
                </div>
               </li>
              <li class="blog blog17 left_side third_sec_pad">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">72</p>
                    <p class="m-0">200</p>
                </div>
               </li>
              <li class="blog blog18 left_side third_sec_pad_high">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">73</p>
                    <p class="m-0">418</p>
                </div>
               </li> 
          </ul>
          
           <ul class="fourth_list clr list-unstyled">
           <?php 
           /*if($plotData4!=false) {
			
			$m=0;
           foreach ($plotData4 as $pinfo)
			{
				$class4="";
				$plot4="";$area4="";$plot_id4='';
				$plot4=$pinfo->plot_no;
				$area4=$pinfo->area; 
				$plot_id4=$pinfo->plot_id;
				$class4=$fourth_list[$m];
				
				/* if($i==1) {
					$class="blog first_blog blog_padding_first red";
				}
				else {
					$class="blog blog".$i." blog_padding blue";
				} */
           ?>
           	<li class="blog blog1 forth_sec_pad-first">
                <div class="number mx-auto text-center">
                    <p class="number_border m-0">74</p>
                    <p class="m-0">432</p>
                </div>
               </li>
               <?php //$m++; }}?>
               <li class="blog blog2 forth_sec_pad-first">
                    <div class="number mx-auto text-center">
                        <p class="number_border m-0">75</p>
                        <p class="m-0">468</p>
                    </div>
               </li> 
          </ul>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
       
          $(".blog").click(function(){
            $(this).addClass("green");
          });
       
    </script>
  </body>
</html>