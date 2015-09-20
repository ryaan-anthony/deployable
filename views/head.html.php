<?php
/**
 * Html head template
 *
 * @var Deployable\Http\Output\Web $this
 */
?>
<script>
    <?php echo $this->getMessages('console.log("%s");') ?>
</script>
<style>
    * {font-family: "Courier New", Courier, monospace;}
    div.container {width:900px; margin: 20px auto;}
    p {padding: 5px; min-height: 200px;}
    p.error {color: white; background: grey;}
    ul,li{list-style: none;}
</style>
<title>...</title>
