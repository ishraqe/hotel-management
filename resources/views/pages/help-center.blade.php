@extends('layout.master')

@section('content')
<!-- end int-header -->
<section class="help-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="content">
        	<ul class="filter hide">
          <li><a href="#" data-filter="*" class="current">ALL<br>
            <span></span></a></li>
          <li><a href="#" data-filter=".pricing">PRICING<br>
            <span></span></a></li>
          <li><a href="#" data-filter=".excelent">EXCELENT<br>
            <span></span></a></li>
          <li><a href="#" data-filter=".accommodation">ACCOMMODATION<br>
            <span></span></a></li>
        </ul>
        <!-- end filter -->
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading1">
                <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1"> How much is the breakfast buffet if it doesn't already come with the room? </a> </h4>
              </div>
              <!-- end panel-heading-->
              <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                <div class="panel-body">
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                  <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Epsum factorial non deposit quid.</p>
                </div>
                <!-- end panel-body -->
              </div>
              <!-- end panel-collapse -->
            </div>
            <!-- end panel -->
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading2">
                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">  We are thinking of staying here for my husbands 50 th birthday in early December. 
                  What is there to do at your resort in the month of December? </a> </h4>
              </div>
              <!-- end panel-heading -->
              <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                <div class="panel-body">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,</p>
                <p>Sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
              </div>
              <!-- end panel-body -->
            </div>
            <!-- end panel-collapse -->
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading3">
                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3"> Would you consider this hotel child friendly (17 months)? </a> </h4>
              </div>
              <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                <div class="panel-body"> 
                
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin</p>
                <p>Coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                <!-- end panel-body -->
              </div>
              <!-- end panel-collapse -->
            </div>
            <!-- end panel -->
            
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading4">
                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4"> How much is the breakfast buffet if it doesn't already come with the room? </a> </h4>
              </div>
              <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                <div class="panel-body"> 
                
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin</p>
                <p>Coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                <!-- end panel-body -->
              </div>
              <!-- end panel-collapse -->
            </div>
            <!-- end panel -->
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading5">
                <h5 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
What is there to do at your resort in the month of December?</a> </h5>
              </div>
              <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                <div class="panel-body"> 
                
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin</p>
                <p>Coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                <!-- end panel-body -->
              </div>
              <!-- end panel-collapse -->
            </div>
            <!-- end panel -->
            
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading6">
                <h6 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
Coffee nulla assumenda shoreditch et?</a> </h6>
              </div>
              <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                <div class="panel-body"> 
                
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin</p>
                <p>Coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                <!-- end panel-body -->
              </div>
              <!-- end panel-collapse -->
            </div>
            <!-- end panel -->
            
          </div>
          <!-- end panel-group --> 
          <div class="col-xs-12 text-center">
          <a href="#" class="btn-orange-small">Ask your question</a>
          </div>
          <!-- end col-12 -->
        </div>
        <!-- end content --> 
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end help-center -->
@endsection