<?php
//  컨텐츠 형식 지정
 header('content-type:application/json;charset=utf-8;');

//  전송할 데이터
  $item = array(
    array("id"=>1,"first_name"=>"Marlow","last_name"=>"Joul","email"=>"mjoul0@google.com","gender"=>"Male"),
    array("id"=>2,"first_name"=>"Sharron","last_name"=>"Veryan","email"=>"sveryan1@cnbc.com","gender"=>"Female"),
    array("id"=>3,"first_name"=>"Tildie","last_name"=>"Lasseter","email"=>"tlasseter2@fda.gov","gender"=>"Female"),
    array("id"=>4,"first_name"=>"Haywood","last_name"=>"Foulger","email"=>"hfoulger3@soup.io","gender"=>"Male"),
    array("id"=>5,"first_name"=>"Alvin","last_name"=>"Rochelle","email"=>"arochelle4@cmu.edu","gender"=>"Male"),
    array("id"=>6,"first_name"=>"Ernestus","last_name"=>"Stennett","email"=>"estennett5@independent.co.uk","gender"=>"Male"),
    array("id"=>7,"first_name"=>"Osbert","last_name"=>"Boggish","email"=>"oboggish6@dot.gov","gender"=>"Male"),
    array("id"=>8,"first_name"=>"Collie","last_name"=>"Gerritsma","email"=>"cgerritsma7@weibo.com","gender"=>"Female"),
    array("id"=>9,"first_name"=>"Cathy","last_name"=>"Winsor","email"=>"cwinsor8@ow.ly","gender"=>"Female"),
    array("id"=>10,"first_name"=>"Ettore","last_name"=>"McVitie","email"=>"emcvitie9@yellowbook.com","gender"=>"Male"),
    array("id"=>11,"first_name"=>"Angele","last_name"=>"Stuckford","email"=>"astuckforda@baidu.com","gender"=>"Female"),
    array("id"=>12,"first_name"=>"Jarib","last_name"=>"Demkowicz","email"=>"jdemkowiczb@xrea.com","gender"=>"Male"),
    array("id"=>13,"first_name"=>"Noam","last_name"=>"Wycliffe","email"=>"nwycliffec@spotify.com","gender"=>"Male"),
    array("id"=>14,"first_name"=>"Matthieu","last_name"=>"Hullot","email"=>"mhullotd@istockphoto.com","gender"=>"Male"),
    array("id"=>15,"first_name"=>"Herold","last_name"=>"Jerams","email"=>"hjeramse@nature.com","gender"=>"Male"),
    array("id"=>16,"first_name"=>"Aarika","last_name"=>"Folbig","email"=>"afolbigf@ustream.tv","gender"=>"Female"),
    array("id"=>17,"first_name"=>"Fields","last_name"=>"Lawson","email"=>"flawsong@istockphoto.com","gender"=>"Male"),
    array("id"=>18,"first_name"=>"Ralph","last_name"=>"De-Ville","email"=>"rdevilleh@google.fr","gender"=>"Male"),
    array("id"=>19,"first_name"=>"Travis","last_name"=>"Vasyunin","email"=>"tvasyunini@dagondesign.com","gender"=>"Male"),
    array("id"=>20,"first_name"=>"Caril","last_name"=>"MacMeekan","email"=>"cmacmeekanj@desdev.cn","gender"=>"Female"),
    array("id"=>21,"first_name"=>"Shayna","last_name"=>"Copin","email"=>"scopink@redcross.org","gender"=>"Female"),
    array("id"=>22,"first_name"=>"Tessa","last_name"=>"Cavee","email"=>"tcaveel@yale.edu","gender"=>"Female"),
    array("id"=>23,"first_name"=>"Webster","last_name"=>"Matelyunas","email"=>"wmatelyunasm@163.com","gender"=>"Male"),
    array("id"=>24,"first_name"=>"Kerwin","last_name"=>"Rennock","email"=>"krennockn@wikipedia.org","gender"=>"Male"),
    array("id"=>25,"first_name"=>"Bogart","last_name"=>"Halfacree","email"=>"bhalfacreeo@dedecms.com","gender"=>"Male"),
    array("id"=>26,"first_name"=>"Sher","last_name"=>"Scorton","email"=>"sscortonp@epa.gov","gender"=>"Female"),
    array("id"=>27,"first_name"=>"Emilia","last_name"=>"Fischer","email"=>"efischerq@wisc.edu","gender"=>"Female"),
    array("id"=>28,"first_name"=>"Charmine","last_name"=>"Joll","email"=>"cjollr@ca.gov","gender"=>"Female"),
    array("id"=>29,"first_name"=>"Kennett","last_name"=>"Bateman","email"=>"kbatemans@mashable.com","gender"=>"Male"),
    array("id"=>30,"first_name"=>"Gottfried","last_name"=>"Jerrams","email"=>"gjerramst@tinyurl.com","gender"=>"Male"),
    array("id"=>31,"first_name"=>"Corilla","last_name"=>"Puttan","email"=>"cputtanu@twitter.com","gender"=>"Female"),
    array("id"=>32,"first_name"=>"Truman","last_name"=>"Kingstne","email"=>"tkingstnev@cafepress.com","gender"=>"Male"),
    array("id"=>33,"first_name"=>"Marja","last_name"=>"Copnall","email"=>"mcopnallw@huffingtonpost.com","gender"=>"Female"),
    array("id"=>34,"first_name"=>"Collette","last_name"=>"Blanch","email"=>"cblanchx@hexun.com","gender"=>"Female"),
    array("id"=>35,"first_name"=>"Kore","last_name"=>"Kehoe","email"=>"kkehoey@indiatimes.com","gender"=>"Female"),
    array("id"=>36,"first_name"=>"Elwood","last_name"=>"Bukowski","email"=>"ebukowskiz@bbc.co.uk","gender"=>"Male"),
    array("id"=>37,"first_name"=>"Elfrieda","last_name"=>"Ingleby","email"=>"eingleby10@amazon.co.jp","gender"=>"Female"),
    array("id"=>38,"first_name"=>"Valaree","last_name"=>"Lawden","email"=>"vlawden11@kickstarter.com","gender"=>"Female"),
    array("id"=>39,"first_name"=>"Flinn","last_name"=>"Fuller","email"=>"ffuller12@tmall.com","gender"=>"Male"),
    array("id"=>40,"first_name"=>"Luce","last_name"=>"Huckerbe","email"=>"lhuckerbe13@phpbb.com","gender"=>"Male"),
    array("id"=>41,"first_name"=>"Esme","last_name"=>"Enrigo","email"=>"eenrigo14@networkadvertising.org","gender"=>"Female"),
    array("id"=>42,"first_name"=>"Ardine","last_name"=>"Skyrme","email"=>"askyrme15@cocolog-nifty.com","gender"=>"Female"),
    array("id"=>43,"first_name"=>"Dilly","last_name"=>"Rock","email"=>"drock16@apple.com","gender"=>"Male"),
    array("id"=>44,"first_name"=>"Barton","last_name"=>"Olwen","email"=>"bolwen17@scientificamerican.com","gender"=>"Male"),
    array("id"=>45,"first_name"=>"Clerissa","last_name"=>"Rushworth","email"=>"crushworth18@seattletimes.com","gender"=>"Female"),
    array("id"=>46,"first_name"=>"Nicolis","last_name"=>"Jago","email"=>"njago19@cdbaby.com","gender"=>"Male"),
    array("id"=>47,"first_name"=>"La verne","last_name"=>"Andriessen","email"=>"landriessen1a@si.edu","gender"=>"Female"),
    array("id"=>48,"first_name"=>"Wallie","last_name"=>"Beckey","email"=>"wbeckey1b@toplist.cz","gender"=>"Male"),
    array("id"=>49,"first_name"=>"Graehme","last_name"=>"Jancik","email"=>"gjancik1c@archive.org","gender"=>"Male"),
    array("id"=>50,"first_name"=>"Skelly","last_name"=>"Godspeede","email"=>"sgodspeede1d@canalblog.com","gender"=>"Male")
  );

$data = array(
  'rt' => 'OK',
  'pubDate' => date('Y-m-d H:i:s',time()),
  'item' => $item
);
$json = json_encode($data);
echo($json);
?>