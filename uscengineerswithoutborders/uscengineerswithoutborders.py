import os
import urllib
import jinja2
import webapp2
import cgi

from google.appengine.ext import ndb
from google.appengine.ext import db

JINJA_ENVIRONMENT = jinja2.Environment(
    loader=jinja2.FileSystemLoader(os.path.dirname(__file__)),
    extensions=['jinja2.ext.autoescape'],
    autoescape=True)

class MainPage

class ContactPage

class LocalPage

class MediaPage

class NewsPage

class ProjectsPage

class SupportPage

application = webapp2.WSGIApplication([
    ('/', MainPage),
    ('/contact', ContactPage),
    ('/local', LocalPage),
    ('/media', MediaPage),
    ('/news', NewsPage),
    ('/projects', ProjectsPage),
    ('/support', SupportPage)
], debug=True, config = config)