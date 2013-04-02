<section id="motivation" class="section what scrollto animated bounceInUp">
    <div class="subtracked">
        <h1>Traits, Quotes, Guidelines</h1>
        <article class="groups">
            <?php
                $motivatorsJsUri = "http://".$_SERVER['SERVER_NAME']."/simplejuice/_configuration/motivators.js";
                $motivators = json_decode(file_get_contents($motivatorsJsUri), true);
                $c = count($motivators);
                $i = 0;
                while($i<12) {
                    $rnd = rand(0,$c);
                    if($motivators[$rnd]!=null) {
                        unset($motivators[rand(0,$c)]);
                        $i++;
                    }
                }
                shuffle($motivators);
                foreach($motivators as $motivator) {
            ?>
                    <section class="group">
                        <h2><?php echo $motivator['inlet'];?></h2>
                        <p>
                            <span class="quote simple <?php echo $motivator['cssClass'];?>">
                                <?php echo $motivator['exerp'];?>
                            </span>
                            <span class="quotee">
                                <?php echo $motivator['quotee'];?>
                            </span>
                        </p>
                    </section>
            <?php
                }
            ?>
        </article>
    </div>
</section>