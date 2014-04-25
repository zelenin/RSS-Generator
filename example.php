<?php

require_once realpath(__DIR__ . '/Feed.php');

$feed = new \Zelenin\Feed;

// $feed->addChannel();
$feed->addChannel('http://example.com/rss.xml');

// required channel elements
$feed
    ->addChannelTitle('Channel title')
    ->addChannelLink('http://example.com')
    ->addChannelDescription('Channel description');

// optional channel elements
$feed
    ->addChannelLanguage('en-US')
    ->addChannelCopyright('Channel copyright, ' . date('Y'))
    ->addChannelManagingEditor('editor@example.com (John Doe)')
    ->addChannelWebMaster('webmaster@example.com (John Doe)')
    ->addChannelPubDate(1300000000) // timestamp/strtotime/DateTime
    ->addChannelLastBuildDate(1300000000) // timestamp/strtotime/DateTime
    ->addChannelCategory('Channel category', 'http://example.com/category')
    ->addChannelCloud('rpc.sys.com', 80, '/RPC2', 'myCloud.rssPleaseNotify', 'xml-rpc')
    ->addChannelTtl(60) // minutes
    ->addChannelImage('http://example.com/channel.jpg', 'http://example.com', 88, 31, 'Image description')
    ->addChannelRating('PICS label')
    ->addChannelTextInput('Title', 'Description', 'Name', 'http://example.com/form.php')
    ->addChannelSkipHours(array(1, 2, 3))
    ->addChannelSkipDays(array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'));

/*
$feed
    ->addChannelElement('test', 'desc', array('attr1' => 'val1', 'attr2' => 'val2'))
    ->addChannelElementWithSub('testsub', array('attr1' => 'val1', 'attr2' => 'val2'))
    ->addChannelElementWithIdentSub('testidentsub', 'child', array('val1', 'val2'));
*/

$feed->addItem();

// title or description are required
$feed
    ->addItemTitle('Item title')
    ->addItemDescription('Item description');

$feed
    ->addItemLink('http://example.com/post1')
    ->addItemAuthor('author@example.com (John Doe)')
    ->addItemCategory('Item category', 'http://example.com/category')
    ->addItemComments('http://example.com/post1/#comments')
    ->addItemEnclosure('http://example.com/mp3.mp3', 99999, 'audio/mpeg')
    ->addItemGuid('http://example.com/post1', true)
    ->addItemPubDate(1300000000) // timestamp/strtotime/DateTime
    ->addItemSource('RSS title', 'http://example.com/rss.xml');

$feed->addItemElement('test', 'desc', array('attr1' => 'val1', 'attr2' => 'val2'));

echo $feed;
// $feed->save(realpath(__DIR__ . '/rss.xml'));
