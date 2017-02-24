# Bugsnag Exception Logging For Statamic

This addon will extend the built-in Statamic exception handling to allow 
sending exceptions to Bugsnag in addition to the default handling on the 
site.

### Installation Instructions:

1. Copy addon files to a `BugsnagLogging` folder under the default 
   statamic addons folder. Typically somewhere like:
   `site/addons/BugsnagLogging`

2. Run `php please update:addons` on the commandline in the root folder
   of your statamic site. This will download the necessary Bugsnag 
   dependencies.

3. Add your Bugsnag API key to your site's `.env` file like so:
   `BUGSNAG_APIKEY="YourBugsnagApiKeyHere"`

4. That's it! Test by doing something to cause an exception on your site
   and see if it shows up in Bugsnag.
   
### Followup Notes:

- 