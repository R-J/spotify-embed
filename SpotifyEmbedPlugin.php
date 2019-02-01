<?php

class SpotifyEmbedPlugin extends Gdn_Plugin {
    public function format_links_handler($sender, $args) {
        $pattern = '/<a href="(https:\/\/open\.spotify\.com\/embed\/album\/[a-z0-9]*)"( rel="nofollow")?>(https:\/\/open\.spotify\.com\/embed\/album\/[a-z0-9]*)<\/a>/i';
        $replace = '<iframe src="$3" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>';
        
        $args['Mixed'] = Gdn_Format::replaceButProtectCodeBlocks(
            $pattern,
            $replace,
            $args['Mixed']
        );
    }
}
