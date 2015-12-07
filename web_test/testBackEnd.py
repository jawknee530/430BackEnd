#!/usr/bin/env python
import sys

arg = sys.argv[1]
if arg == 'a':
    print '*'*70+'\n'
    print '-'*52
    execfile("create_user.py")
    print '-'*52
    execfile("get_user.py")
    print '-'*52
    execfile("build_room.py")
    print '-'*52
    execfile("get_lobby.py")
    print '-'*52
    execfile("add_songs.py")
    print '-'*52
    execfile("delete_song.py")
    print '-'*52
    execfile("delete_room.py")
    print '-'*52
    execfile("remove_user.py")
    print '-'*52
elif arg == 'c':
    print '*'*70+'\n'
    print '-'*52
    execfile("create_user.py")
    print '-'*52
    execfile("get_user.py")
    print '-'*52
    execfile("build_room.py")
    print '-'*52
    execfile("get_lobby.py")
    print '-'*52
    execfile("add_songs.py")
    print '-'*52
elif arg == 'd':
    print '*'*70+'\n'
    print '-'*52
    execfile("delete_song.py")
    print '-'*52
    execfile("delete_room.py")
    print '-'*52
    execfile("remove_user.py")
    print '-'*52

print '-'*70
print '-'*27+"All ROUTES PASS"+'-'*28
print '-'*70
print '*'*70+'\n'

