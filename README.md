Twitch.tv integration plugin

Integrate Online Status or Streams Toplist or Games Toplist to your Website. More features planned.

## Features
- Channel Feed: Shows a list of posts that belong to the channel's feed.
- Online Check: Show Online/Offline Box for the given Channel
- Stream: Embedding Twitch Live Streams & Videos
- Toplist Games: Toplist of Games by number of current viewers on Twitch.
- Toplist Streams: Toplist of Streams by number of current viewers on Twitch.

## Add a component
You can put the Twitch Components on any front-end page. Add the desired Component to a page or layout. Click the added component and paste your Twitch Channel Name in the **Channel Name** field. 

**Update:** Twitch Client_Id is now required for each and every Component.

Close the Inspector and save the page.
 
#### Example
The simplest way to add the Twitch Online Check is to use the component's default partial and the `{% component %}` tag. Add it to a page or layout where you want to display it:

    {% component 'check' %}
    

## Customize Component Template
If you don't like the standard template you can create your own partial in your theme. The default partials are located in `plugins/digitalronin/twitch/components/check/default.htm`. 
