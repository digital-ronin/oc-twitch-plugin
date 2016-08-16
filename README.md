Twitch.tv integration plugin

Integrate Online Status or Streams Toplist or Games Toplist to your Website. More features planned.


## Twitch Online Check
You can put the Twitch Online Check on any front-end page. Add the Twitch Online Check component to a page or layout. Click the added component and paste your Twitch Channel Name in the **Channel Name** field. Close the Inspector and save the page.
 
 
The simplest way to add the Twitch Online Check is to use the component's default partial and the `{% component %}` tag. Add it to a page or layout where you want to display it:

    {% component 'check' %}
    
    
If you don't like the standard template you can create your own partial in your theme. The default partial is located in `plugins/digitalronin/twitch/components/check/default.htm`.


## Toplist
You can put the Twitch Toplist on any front-end page. Add the Twitch Toplist component to a page or layout. Click the added component and select the type you want for the Toplist and enter the limit. Close the Inspector and save the page.
 
 
The simplest way to add the Twitch Toplist is to use the component's default partial and the `{% component %}` tag. Add it to a page or layout where you want to display it:

    {% component 'toplist' %}
    
    
If you don't like the standard template you can create your own partial in your theme. The default partial is located in `plugins/digitalronin/twitch/components/toplist/default.htm`.
This Component has also two sub templates for the different toplist types.