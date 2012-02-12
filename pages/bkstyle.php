<?php header("Content-type: text/css"); ?>

<?php $bordergrey="#7A7A7A"; ?>

body {
    margin : 0;
    Padding : 0;
    font-family : Verdana, Arial, sans-serif ;
    background-color : 	#F5F5F5;
}

/* navigation bar */
.navbar {
    font-size : small;
    width : 100%;
    margin-top: 5px;
    margin-left: 0;
    margin-right : 0;
    margin-bottom: 15px;
    padding-bottom: 80px;
    overflow: hidden;
}


.navline {
    margin : 10px -1px 10px -1px;
    padding : 4px 0 4px 30px;
    border : 1px solid <?php echo $bordergrey; ?>;
    background-color : White; 
}

/* navigation items */
.navitem {
    text-align : center;
    text-decoration : none; /* no underlining for links */
    padding : 0 15px 0 15px;
    margin : 10px;
    padding : 6px;
    border : 1px solid <?php echo $bordergrey; ?>;
    background-color : White;
}

.navitem_active {
    text-align : center;
    text-decoration : none; /* no underlining for links */
    padding : 0 15px 0 15px;
    margin : 10px;
    padding : 6px;
    border : 1px solid <?php echo $bordergrey; ?>;
    background-color : #F5F5F5;
}

a.navitem {
}

a.navitem:hover {
    background-color : 	#F5F5F5;
}

/* empty div to locate the tooltip relative to */
.place
{
    background-color: red;
    position:relative;
    top:12px;
    left:0px;
    width:1px;
    height:40px;
}

.tooltip
{
    position:absolute;
    top:3px;
    left:-15px;
    width:200px;
    display:none;
    background-color : #F5F5F5;
    text-align : center;
    text-decoration : none; /* no underlining for links */
    padding : 0 15px 0 15px;
    margin : 10px;
    padding : 6px;
    border : 1px solid <?php echo $bordergrey; ?>;
}

.content {
    background-color : White;
    margin : -80px 4% 4% 4%;
    padding : 0px 0px 10px 0px;
    border : 1px solid <?php echo $bordergrey; ?>;
}

/* extra padding */
.content_ep {
    background-color : White;
    margin : -80px 4% 4% 4%;
    padding : 20px 20px 20px 20px;
    border : 1px solid <?php echo $bordergrey; ?>;
}

.hptopbox {
     margin-bottom : -10px;
  //  margin-top : 20px;
  //  margin-left:15px;
  //  margin-right:15px;
}


.hpbox {
    margin : 5px 5px 5px 5px;
    padding : 20px;
    border : 1px solid <?php echo $bordergrey; ?>;
    background-color : 	#F5F5F5;
}

.hpitemlist {
    margin-right:20px;
    margin-left:20px;
}


.hpboxeven {
}

.papers {
}

.paper {
    list-style: none;
    margin-left: -20px;
}

.box {
    width : 95%;
    border : 1px solid <?php echo $bordergrey; ?>;
    padding : 10px;
    margin-top:10px;
    background-color : 	#F5F5F5;
}

/* boxes for comput page */
.cbox {
    border : 1px solid <?php echo $bordergrey; ?>;
    padding-left : 15px;
    padding-right : 15px;
    margin-bottom: 20px;
    background-color : 	#F5F5F5;
}

.ctitle {
    margin-left : -12px;
    margin-top : -2px;
    margin-bottom : -10px;
    color : Grey;
}

.cboxlast {
    border : 1px solid <?php echo $bordergrey; ?>;
    padding-left : 15px;
    padding-right : 15px;
    margin-bottom: 0px;
    background-color : 	#F5F5F5;
}

img.pic
{
    display: block;
    margin-left: auto;
    margin-right: auto;
}

p.caption
{
    text-align: center;
}


/* my picture on index.php */
.mypic {
    float : left;
    margin : 0px 10px 5px 0px;
    width : 130px;
}

/* twitter, gplus, github item styling */
.item {
    background-color : #F5F5F5;
    border : 1px solid #7A7A7A;
    padding : 10 10 10 10;
    list-style : none;
    margin-top : 7px;
}

.itemimg {
    vertical-align : top;
    padding-right : 10;
}

.time {
    color : grey;
    font-size : small;
}

/* table of lecture on teach.php */
.lectureTable {
    margin : 15px;
    border-collapse : collapse;
}

.lectureTable td {
    border : 1px solid <?php echo $bordergrey; ?>;
    padding : 10px;
    background-color : 	#F5F5F5;
}