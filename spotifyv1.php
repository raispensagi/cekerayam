<?php
 goto WOLC7; VmGrW: foreach (explode("\xa", str_replace("\xd", '', file_get_contents($xyz))) as $key => $akun) { $pecah = explode("\x7c", trim($akun)); $email = trim($pecah[0]); $passwd = trim($pecah[1]); $headers = array(); $headers[] = "\125\163\145\162\55\x41\147\x65\x6e\x74\72\40\123\160\x6f\x74\x69\x66\x79\x2f\x38\56\65\56\65\x31\x20\x41\156\x64\162\157\151\144\57\62\x32\x20\50\x53\x4d\55\101\71\60\x38\x4e\51"; $headers[] = "\103\x6f\x6e\x74\x65\156\x74\x2d\124\x79\160\145\x3a\x20\141\160\160\x6c\x69\x63\141\x74\151\157\156\57\x78\55\167\x77\167\x2d\x66\x6f\x72\x6d\x2d\165\162\154\145\x6e\143\157\144\145\144"; $gas = curl("\150\x74\164\x70\163\x3a\57\x2f\163\x70\143\x6c\x69\145\x6e\164\x2e\x77\x67\56\163\x70\157\164\x69\x66\171\56\143\x6f\x6d\x2f\x73\x69\x67\156\x75\x70\57\160\x75\142\x6c\x69\x63\57\x76\61\57\x61\x63\x63\157\165\x6e\x74\57", "\153\x65\171\75\x31\64\x32\142\65\x38\63\x31\62\71\x62\62\144\x66\x38\62\71\144\x65\63\x36\x35\66\x66\71\x65\142\x34\x38\64\x65\66\x26\160\x61\163\163\167\157\x72\x64\75" . $passwd . "\46\x63\162\145\141\x74\x69\x6f\x6e\137\160\157\151\156\164\x3d\x63\x6c\x69\x65\x6e\164\x5f\x6d\x6f\142\x69\154\145\x26\x6e\x61\155\145\75\x41\167\167\46\x67\x65\x6e\x64\x65\162\75\x6d\141\x6c\x65\46\151\141\147\162\145\x65\x3d\164\162\x75\x65\46\160\154\x61\164\146\157\162\x6d\75\x41\156\x64\162\157\x69\x64\x2d\101\x52\x4d\x26\x62\x69\162\164\150\137\144\141\x79\x3d\66\x26\x62\151\x72\x74\x68\137\155\157\156\x74\150\x3d\x34\x26\x62\151\162\164\150\137\x79\x65\x61\x72\75\x32\x30\60\66\x26\x70\x61\x73\x73\167\157\x72\144\137\162\x65\160\x65\141\x74\75" . $passwd . "\46\x65\155\x61\151\154\x3d" . $email . '', $headers); if (strpos($gas[1], "\105\155\141\x69\154\40\151\x74\x75\40\x73\165\144\141\150\x20\164\145\x72\144\141\x66\164\141\x72\x20\x70\x61\144\141\x20\141\153\x75\156\x2e")) { echo "\x5b\107\x61\x67\x61\x6c\x5d\40{$email}\174{$passwd}\12"; } else { echo "\133\123\x75\x63\x63\145\163\163\x20\x52\x65\x67\151\163\x74\145\x72\135\40{$email}\x7c{$passwd}\12"; fwrite(fopen("\x73\x70\x6f\164\151\146\x79\55\x6c\151\166\x65\x2e\x74\x78\x74", "\141"), "\x5b\x53\165\143\143\145\x73\163\40\x52\145\x67\151\163\x74\145\162\135\40\x7c\x20{$email}\x7c{$passwd}\x20\xa"); } } goto YjEbq; me1w4: $xyz = trim(fgets(STDIN)); goto VmGrW; WOLC7: echo "\114\151\x73\164\x20\105\x6d\x70\x61\163\40\x59\x61\x6e\x67\x20\x4d\141\x75\x20\104\x69\x20\102\x75\x61\164\40\x20\x3a\x20"; goto me1w4; YjEbq: function curl($url, $post, $headers) { $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_HEADER, 1); if ($headers !== null) { curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); } if ($post !== null) { curl_setopt($ch, CURLOPT_POSTFIELDS, $post); } $result = curl_exec($ch); $header = substr($result, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE)); $body = substr($result, curl_getinfo($ch, CURLINFO_HEADER_SIZE)); preg_match_all("\x2f\136\x53\145\x74\x2d\x43\157\157\153\151\x65\x3a\x5c\163\x2a\x28\x5b\136\73\135\x2a\x29\57\x6d\x69", $result, $matches); $cookies = array(); foreach ($matches[1] as $item) { parse_str($item, $cookie); $cookies = array_merge($cookies, $cookie); } return array($header, $body, $cookies); }