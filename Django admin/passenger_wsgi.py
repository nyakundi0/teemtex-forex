import os
import sys

# Set the path to your Django project
project_path = '/home/teemtexc/teemtexc'  # Replace with your actual project path
sys.path.insert(0, project_path)

# Set the settings module
os.environ['DJANGO_SETTINGS_MODULE'] = 'teemtexc.settings'  # Make sure the path matches your project structure

# Activate the virtual environment if you have one
activate_env = os.path.expanduser('/home/teemtexc/venv/bin/activate_this.py')  # Replace with your venv path
with open(activate_env) as f:
    exec(f.read(), dict(__file__=activate_env))

# Import the WSGI application
from teemtexc.wsgi import application  # Import your WSGI application

# Ensure application is callable
assert application is not None, "WSGI application could not be loaded"
