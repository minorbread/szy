<!-- 轮播 -->
<div class="col-md-10 col-md-offset-1">
<div class="bs-example">
  <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
      <li data-target="#carousel-example-captions" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img data-src="holder.js/980x500/auto/#777:#777" alt="980x500" src="img/school_1.jpg" data-holder-rendered="true">
        <div class="carousel-caption">
          <?php 
            echo "<h3>".$title1."</h3>";
            echo "<p>".$title2."</p>";
          ?>
        </div>
      </div>
      <div class="item">
        <img data-src="holder.js/980x500/auto/#666:#666" alt="980x500" src="img/school_2.jpg" data-holder-rendered="true">
        <div class="carousel-caption">
          <?php 
            echo "<h3>".$title1."</h3>";
            echo "<p>".$title2."</p>";
          ?>
        </div>
      </div>
      <div class="item">
        <img data-src="holder.js/980x500/auto/#555:#5555" alt="980x500" src="img/school_3.jpg" data-holder-rendered="true">
        <div class="carousel-caption">
          <?php 
           echo "<h3>".$title1."</h3>";
           echo "<p>".$title2."</p>";
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<hr></div>

<hr>
<hr>
<div class="row">
<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
  <div class="col-lg-4 col-sm-5">
    <div class="panel panel-info">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-info">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <span class="glyphicon glyphicon glyphicon-time"></span>
                &nbsp;近期消息
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="thumbnail">
                    <?php
                      echo "<img data-src='holder.js/300x300' src='".$img2."' alt='error'>"
                    ?>
                    <div class="caption">
                      <?php
                      echo "<h3>".$mes1."</h3>";
                      echo "<p>".$mes2."</p>";
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-info">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">近期消息</a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="thumbnail">
                    <?php
                      echo "<img data-src='holder.js/300x300' src='".$img3."' alt='error'>"
                    ?>
                    <div class="caption">
                      <?php
                      echo "<h3>".$mes3."</h3>";
                      echo "<p>".$mes4."</p>";
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-info">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">近期消息</a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="thumbnail">
                  <?php
                    echo "<img data-src='holder.js/300x300' src='".$img1."' alt='error'>"
                  ?>
                  <div class="caption">
                    <?php
                    echo "<h3>".$mes5."</h3>";
                    echo "<p>".$mes6."</p>";
                      ?>
                  </div>
                </div>
              </div>
            </div>
          </div></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-7 col-sm-7">
    <div class="panel panel-info">
      <div class="panel-heading">
        <span class="glyphicon glyphicon-globe"></span>
        &nbsp;学院要闻
      </div>
      <ul class="list-group" id="roll1">
        <li class="list-group-item">
          <div>
            <p>
              <?php
                echo "<a href='datemes/mes1.html'  data-toggle='modal' data-target='#myModal'>".$new1."</a>";
              ?>
            </p>
            <p>
              <?php
                echo "<a href='#'>".$new2."</a>";
              ?>
            </p>
          </div>
        </li>
        <li class="list-group-item">
          <div>
            <p>
              <?php
                echo "<a href='#'>".$new3."</a>";
              ?>
            </p>
            <p>
              <?php
                echo "<a href='#'>".$new4."</a>";
              ?>
            </p>
          </div>
        </li>
        <li class="list-group-item">
          <div>
            <p>
              <?php
                echo "<a href='#'>".$new5."</a>";
              ?>
            </p>
            <p>
              <?php
                echo "<a href='#'>".$new6."</a>";
              ?>
            </p>
          </div>
        </li>
        <li class="list-group-item">
          <div>
            <p>
              <?php
                echo "<a href='#'>".$new7."</a>";
              ?>
            </p>
            <p>
              <?php
                echo "<a href='#'>".$new8."</a>";
              ?>
            </p>
          </div>
        </li>
        <li class="list-group-item">
          <div>
            <p>
              <?php
                echo "<a href='#'>".$new9."</a>";
              ?>
            </p>
            <p>
              <?php
                echo "<a href='#'>".$new10."</a>";
              ?>
            </p>
          </div>
        </li>
        <li class="list-group-item">
          <div>
            <p>
              <?php
                echo "<a href='#'>".$new11."</a>";
              ?>
            </p>
            <p>
              <?php
                echo "<a href='#'>".$new12."</a>";
              ?>
            </p>
          </div>
        </li>
      </ul>
    </div>
    <div class="panel panel-info">
      <div class="panel-heading">
        <span class="glyphicon glyphicon-align-left"></span>
        &nbsp;系部动态
      </div>
      <ul class="list-group"  id="roll2">
        <li class="list-group-item">
          <div>
            <p>
              <?php
                echo "<a href='#'>".$new13."</a>";
              ?>
            </p>
            <p>
              <?php
                echo "<a href='#'>".$new14."</a>";
              ?>
            </p>
          </div>
        </li>
        <li class="list-group-item">
          <div>
            <p>
              <?php
                echo "<a href='#'>".$new15."</a>";
              ?>
            </p>
            <p>
              <?php
                echo "<a href='#'>".$new16."</a>";
              ?>
            </p>
          </div>
        </li>
        <li class="list-group-item">
          <div>
            <p>
              <?php
                echo "<a href='#'>".$new17."</a>";
              ?>
            </p>
            <p>
              <?php
                echo "<a href='#'>".$new18."</a>";
              ?>
            </p>
          </div>
        </li>
        <li class="list-group-item">
          <div>
            <p>
              <?php
                echo "<a href='#'>".$new19."</a>";
              ?>
            </p>
            <p>
              <?php
                echo "<a href='#'>".$new20."</a>";
              ?>
            </p>
          </div>
        </li>
        <li class="list-group-item">
          <div>
            <p>
              <?php
                echo "<a href='#'>".$new21."</a>";
              ?>
            </p>
            <p>
              <?php
                echo "<a href='#'>".$new22."</a>";
              ?>
            </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 hidden-sm hidden-md">
    <div class="panel panel-info">
      <div class="panel-heading">
        <span class="glyphicon glyphicon-bullhorn"></span>
        &nbsp;通知公告
      </div>
      <div class="list-group">
        <a href="#" class="list-group-item">
        <?php 
          echo "<h4 class='list-group-item-heading'>".$mes_title1."</h4><p class='list-group-item-text'>".$mes_body1."</p>";
        ?>
        </a>
        <a href="#" class="list-group-item">
        <?php 
          echo "<h4 class='list-group-item-heading'>".$mes_title2."</h4><p class='list-group-item-text'>".$mes_body2."</p>";
        ?>
        </a>
        <a href="#" class="list-group-item active1">
          <!-- <h4 class="list-group-item-heading">List group item heading</h4>
        -->
        <!-- <p class="list-group-item-text">消息消息消息消息消息消息消息消息消息消息消息消息消息消息消息消息消息消息消息消息消息消息消息消息消息消息消息消息消息</p>
      -->
    </a>
    <a href="#" class="list-group-item">
      <?php 
        echo "<h4 class='list-group-item-heading'>".$mes_title3."</h4><p class='list-group-item-text'>".$mes_body3."</p>";
      ?>
    </a>
    <a href="#" class="list-group-item">
      <?php 
        echo "<h4 class='list-group-item-heading'>".$mes_title4."</h4><p class='list-group-item-text'>".$mes_body4."</p>";
      ?>    
    </a>
  </div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-5 col-md-offset-1 visible-md-block col-sm-offset-1 visible-sm-block col-sm-5">
<div class="panel panel-info">
<div class="panel-heading">
  <span class="glyphicon glyphicon-bullhorn"></span>
  &nbsp;通知公告
</div>
<div class="list-group">
  <a href="#" class="list-group-item">
      <?php 
         echo "<h4 class='list-group-item-heading'>".$mes_title1."</h4><p class='list-group-item-text'>".$mes_body1."</p>";
      ?>
  </a>
  <a href="#" class="list-group-item">
      <?php 
         echo "<h4 class='list-group-item-heading'>".$mes_title2."</h4><p class='list-group-item-text'>".$mes_body2."</p>";
      ?>
  </a>
</div>

</div>
</div>
<div class="col-md-5 visible-md-block visible-sm-block col-sm-5">
<div class="panel panel-info">
<div class="panel-heading">
  <span class="glyphicon glyphicon-bullhorn"></span>
  &nbsp;通知公告
</div>
<div class="list-group">
  <a href="#" class="list-group-item">
    <?php 
      echo "<h4 class='list-group-item-heading'>".$mes_title3."</h4><p class='list-group-item-text'>".$mes_body3."</p>";
    ?>
  </a>
  <a href="#" class="list-group-item">
    <?php 
      echo "<h4 class='list-group-item-heading'>".$mes_title4."</h4><p class='list-group-item-text'>".$mes_body4."</p>";
    ?>

  </a>
</div>

</div>
</div>
</div>
<hr>