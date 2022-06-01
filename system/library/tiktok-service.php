<?php
class Download
{
    function from($url)
    {
        $share_url = 'https://toiyeuems.herokuapp.com/api/api-tiktok.php?url='.encode($url);
        $share_data = file_get_contents_curl($share_url);
        $share_data = json_decode($share_data, true);
        $response["source"] = "TikTok";
        $response["id"] = $share_data["aweme_id"];
        $response["title"] = $share_data["desc"];
        $response['thumbnail'] = $share_data["video_origin_cover"];
        $response['author_avatar'] = $share_data["author_cover"];
        $response['video_link_wm'] = $share_data["video_watermark"];
        $response['video_link_nwm'] = $share_data["video_no_watermark"];
        $response['music_tt'] = $share_data["music_author"];
        $response['music_uri'] = $share_data["music_url"];
        return json_encode($response);
    }
}