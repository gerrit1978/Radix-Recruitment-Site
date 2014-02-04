<?php 


$options['sites'] = array (
);
$options['profiles'] = array (
  0 => 'minimal',
  1 => 'bb',
  2 => 'testing',
  3 => 'standard',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'syslog' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'configure' => 'admin/config/development/logging',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'statistics' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'aggregator_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/aggregator/tests/aggregator_test.module',
        'basename' => 'aggregator_test.module',
        'name' => 'aggregator_test',
        'info' => 
        array (
          'name' => 'Aggregator module tests',
          'description' => 'Support module for aggregator related testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'aggregator' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'dashboard' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.24',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'contextual' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'profile' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
        'info' => 
        array (
          'name' => 'Profile',
          'description' => 'Supports configurable user profiles.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'profile.test',
          ),
          'configure' => 'admin/config/people/profile',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'tracker' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'user_form_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/user/tests/user_form_test.module',
        'basename' => 'user_form_test.module',
        'name' => 'user_form_test',
        'info' => 
        array (
          'name' => 'User module form tests',
          'description' => 'Support module for user form testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'user' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7018',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'color' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'poll' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'translation_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/translation/tests/translation_test.module',
        'basename' => 'translation_test.module',
        'name' => 'translation_test',
        'info' => 
        array (
          'name' => 'Content Translation Test',
          'description' => 'Support module for the content translation tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'translation' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'php' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'help' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'blog' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'openid_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/openid/tests/openid_test.module',
        'basename' => 'openid_test.module',
        'name' => 'openid_test',
        'info' => 
        array (
          'name' => 'OpenID dummy provider',
          'description' => 'OpenID provider used for testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'openid',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'openid' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.24',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'rdf_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/rdf/tests/rdf_test.module',
        'basename' => 'rdf_test.module',
        'name' => 'rdf_test',
        'info' => 
        array (
          'name' => 'RDF module tests',
          'description' => 'Support module for RDF module testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'rdf' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'contact' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'taxonomy' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'shortcut' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'dblog' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'forum' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'menu' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'trigger_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/trigger/tests/trigger_test.module',
        'basename' => 'trigger_test.module',
        'name' => 'trigger_test',
        'info' => 
        array (
          'name' => 'Trigger Test',
          'description' => 'Support module for Trigger tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.24',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'trigger' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'search_embedded_form' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/search/tests/search_embedded_form.module',
        'basename' => 'search_embedded_form.module',
        'name' => 'search_embedded_form',
        'info' => 
        array (
          'name' => 'Search embedded form',
          'description' => 'Support module for search module testing of embedded forms.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'search_extra_type' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/search/tests/search_extra_type.module',
        'basename' => 'search_extra_type.module',
        'name' => 'search_extra_type',
        'info' => 
        array (
          'name' => 'Test search type',
          'description' => 'Support module for search module testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'search' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'field_ui' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'locale_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/locale/tests/locale_test.module',
        'basename' => 'locale_test.module',
        'name' => 'locale_test',
        'info' => 
        array (
          'name' => 'Locale Test',
          'description' => 'Support module for the locale layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'locale' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'file_module_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/file/tests/file_module_test.module',
        'basename' => 'file_module_test.module',
        'name' => 'file_module_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Provides hooks for testing File module functionality.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'file' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'block_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/block/tests/block_test.module',
        'basename' => 'block_test.module',
        'name' => 'block_test',
        'info' => 
        array (
          'name' => 'Block test',
          'description' => 'Provides test blocks.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'block' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7008',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'overlay' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'node_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/node/tests/node_test.module',
        'basename' => 'node_test.module',
        'name' => 'node_test',
        'info' => 
        array (
          'name' => 'Node module tests',
          'description' => 'Support module for node related testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'node_access_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/node/tests/node_access_test.module',
        'basename' => 'node_access_test.module',
        'name' => 'node_access_test',
        'info' => 
        array (
          'name' => 'Node module access tests',
          'description' => 'Support module for node permission testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'node_test_exception' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/node/tests/node_test_exception.module',
        'basename' => 'node_test_exception.module',
        'name' => 'node_test_exception',
        'info' => 
        array (
          'name' => 'Node module exception tests',
          'description' => 'Support module for node related exception testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'node' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7013',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'toolbar' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.24',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'filter' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'system' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7078',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'comment' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'aaa_update_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/update/tests/aaa_update_test.module',
        'basename' => 'aaa_update_test.module',
        'name' => 'aaa_update_test',
        'info' => 
        array (
          'name' => 'AAA Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.24',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'bbb_update_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/update/tests/bbb_update_test.module',
        'basename' => 'bbb_update_test.module',
        'name' => 'bbb_update_test',
        'info' => 
        array (
          'name' => 'BBB Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.24',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'update_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/update/tests/update_test.module',
        'basename' => 'update_test.module',
        'name' => 'update_test',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'ccc_update_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/update/tests/ccc_update_test.module',
        'basename' => 'ccc_update_test.module',
        'name' => 'ccc_update_test',
        'info' => 
        array (
          'name' => 'CCC Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.24',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'update' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.24',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'path' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'drupal_system_listing_compatible_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
        'basename' => 'drupal_system_listing_compatible_test.module',
        'name' => 'drupal_system_listing_compatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing compatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'drupal_system_listing_incompatible_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
        'basename' => 'drupal_system_listing_incompatible_test.module',
        'name' => 'drupal_system_listing_incompatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing incompatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'psr_0_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/psr_0_test/psr_0_test.module',
        'basename' => 'psr_0_test.module',
        'name' => 'psr_0_test',
        'info' => 
        array (
          'name' => 'PSR-0 Test cases',
          'description' => 'Test classes to be discovered by simpletest.',
          'core' => '7.x',
          'hidden' => true,
          'package' => 'Testing',
          'version' => '7.24',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'system_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/system_test.module',
        'basename' => 'system_test.module',
        'name' => 'system_test',
        'info' => 
        array (
          'name' => 'System test',
          'description' => 'Support module for system testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'path_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/path_test.module',
        'basename' => 'path_test.module',
        'name' => 'path_test',
        'info' => 
        array (
          'name' => 'Hook path tests',
          'description' => 'Support module for path hook testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'database_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/database_test.module',
        'basename' => 'database_test.module',
        'name' => 'database_test',
        'info' => 
        array (
          'name' => 'Database Test',
          'description' => 'Support module for Database layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'ajax_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/ajax_test.module',
        'basename' => 'ajax_test.module',
        'name' => 'ajax_test',
        'info' => 
        array (
          'name' => 'AJAX Test',
          'description' => 'Support module for AJAX framework tests.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'update_script_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/update_script_test.module',
        'basename' => 'update_script_test.module',
        'name' => 'update_script_test',
        'info' => 
        array (
          'name' => 'Update script test',
          'description' => 'Support module for update script testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'filter_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/filter_test.module',
        'basename' => 'filter_test.module',
        'name' => 'filter_test',
        'info' => 
        array (
          'name' => 'Filter test module',
          'description' => 'Tests filter hooks and functions.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'module_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/module_test.module',
        'basename' => 'module_test.module',
        'name' => 'module_test',
        'info' => 
        array (
          'name' => 'Module test',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'form_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/form_test.module',
        'basename' => 'form_test.module',
        'name' => 'form_test',
        'info' => 
        array (
          'name' => 'FormAPI Test',
          'description' => 'Support module for Form API tests.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'batch_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/batch_test.module',
        'basename' => 'batch_test.module',
        'name' => 'batch_test',
        'info' => 
        array (
          'name' => 'Batch API test',
          'description' => 'Support module for Batch API tests.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'entity_cache_test_dependency' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/entity_cache_test_dependency.module',
        'basename' => 'entity_cache_test_dependency.module',
        'name' => 'entity_cache_test_dependency',
        'info' => 
        array (
          'name' => 'Entity cache test dependency',
          'description' => 'Support dependency module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'common_test_cron_helper' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/common_test_cron_helper.module',
        'basename' => 'common_test_cron_helper.module',
        'name' => 'common_test_cron_helper',
        'info' => 
        array (
          'name' => 'Common Test Cron Helper',
          'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'url_alter_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/url_alter_test.module',
        'basename' => 'url_alter_test.module',
        'name' => 'url_alter_test',
        'info' => 
        array (
          'name' => 'Url_alter tests',
          'description' => 'A support modules for url_alter hook testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'taxonomy_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/taxonomy_test.module',
        'basename' => 'taxonomy_test.module',
        'name' => 'taxonomy_test',
        'info' => 
        array (
          'name' => 'Taxonomy test module',
          'description' => '"Tests functions and hooks not used in core".',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'requirements2_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/requirements2_test.module',
        'basename' => 'requirements2_test.module',
        'name' => 'requirements2_test',
        'info' => 
        array (
          'name' => 'Requirements 2 Test',
          'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
          'dependencies' => 
          array (
            0 => 'requirements1_test',
            1 => 'comment',
          ),
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'common_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/common_test.module',
        'basename' => 'common_test.module',
        'name' => 'common_test',
        'info' => 
        array (
          'name' => 'Common Test',
          'description' => 'Support module for Common tests.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'common_test.css',
            ),
            'print' => 
            array (
              0 => 'common_test.print.css',
            ),
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'requirements1_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/requirements1_test.module',
        'basename' => 'requirements1_test.module',
        'name' => 'requirements1_test',
        'info' => 
        array (
          'name' => 'Requirements 1 Test',
          'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'update_test_1' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/update_test_1.module',
        'basename' => 'update_test_1.module',
        'name' => 'update_test_1',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'system_dependencies_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/system_dependencies_test.module',
        'basename' => 'system_dependencies_test.module',
        'name' => 'system_dependencies_test',
        'info' => 
        array (
          'name' => 'System dependency test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => '_missing_dependency',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'system_incompatible_core_version_dependencies_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/system_incompatible_core_version_dependencies_test.module',
        'basename' => 'system_incompatible_core_version_dependencies_test.module',
        'name' => 'system_incompatible_core_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible core version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_core_version_test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'file_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/file_test.module',
        'basename' => 'file_test.module',
        'name' => 'file_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Support module for file handling tests.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'file_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'entity_cache_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/entity_cache_test.module',
        'basename' => 'entity_cache_test.module',
        'name' => 'entity_cache_test',
        'info' => 
        array (
          'name' => 'Entity cache test',
          'description' => 'Support module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_cache_test_dependency',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'system_incompatible_core_version_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/system_incompatible_core_version_test.module',
        'basename' => 'system_incompatible_core_version_test.module',
        'name' => 'system_incompatible_core_version_test',
        'info' => 
        array (
          'name' => 'System incompatible core version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '5.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'session_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/session_test.module',
        'basename' => 'session_test.module',
        'name' => 'session_test',
        'info' => 
        array (
          'name' => 'Session test',
          'description' => 'Support module for session data testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'system_incompatible_module_version_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/system_incompatible_module_version_test.module',
        'basename' => 'system_incompatible_module_version_test.module',
        'name' => 'system_incompatible_module_version_test',
        'info' => 
        array (
          'name' => 'System incompatible module version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'actions_loop_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/actions_loop_test.module',
        'basename' => 'actions_loop_test.module',
        'name' => 'actions_loop_test',
        'info' => 
        array (
          'name' => 'Actions loop test',
          'description' => 'Support module for action loop testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'xmlrpc_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/xmlrpc_test.module',
        'basename' => 'xmlrpc_test.module',
        'name' => 'xmlrpc_test',
        'info' => 
        array (
          'name' => 'XML-RPC Test',
          'description' => 'Support module for XML-RPC tests according to the validator1 specification.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'entity_crud_hook_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/entity_crud_hook_test.module',
        'basename' => 'entity_crud_hook_test.module',
        'name' => 'entity_crud_hook_test',
        'info' => 
        array (
          'name' => 'Entity CRUD Hooks Test',
          'description' => 'Support module for CRUD hook tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'ajax_forms_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/ajax_forms_test.module',
        'basename' => 'ajax_forms_test.module',
        'name' => 'ajax_forms_test',
        'info' => 
        array (
          'name' => 'AJAX form test mock module',
          'description' => 'Test for AJAX form calls.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'theme_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/theme_test.module',
        'basename' => 'theme_test.module',
        'name' => 'theme_test',
        'info' => 
        array (
          'name' => 'Theme test',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'system_incompatible_module_version_dependencies_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/system_incompatible_module_version_dependencies_test.module',
        'basename' => 'system_incompatible_module_version_dependencies_test.module',
        'name' => 'system_incompatible_module_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible module version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_module_version_test (>2.0)',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'error_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/error_test.module',
        'basename' => 'error_test.module',
        'name' => 'error_test',
        'info' => 
        array (
          'name' => 'Error test',
          'description' => 'Support module for error and exception testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'update_test_2' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/update_test_2.module',
        'basename' => 'update_test_2.module',
        'name' => 'update_test_2',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'entity_query_access_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/entity_query_access_test.module',
        'basename' => 'entity_query_access_test.module',
        'name' => 'entity_query_access_test',
        'info' => 
        array (
          'name' => 'Entity query access test',
          'description' => 'Support module for checking entity query results.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'update_test_3' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/update_test_3.module',
        'basename' => 'update_test_3.module',
        'name' => 'update_test_3',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'image_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/image_test.module',
        'basename' => 'image_test.module',
        'name' => 'image_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Support module for image toolkit tests.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'menu_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/tests/menu_test.module',
        'basename' => 'menu_test.module',
        'name' => 'menu_test',
        'info' => 
        array (
          'name' => 'Hook menu tests',
          'description' => 'Support module for menu hook testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'simpletest' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/bootstrap.test',
            6 => 'tests/cache.test',
            7 => 'tests/common.test',
            8 => 'tests/database_test.test',
            9 => 'tests/entity_crud_hook_test.test',
            10 => 'tests/entity_query.test',
            11 => 'tests/error.test',
            12 => 'tests/file.test',
            13 => 'tests/filetransfer.test',
            14 => 'tests/form.test',
            15 => 'tests/graph.test',
            16 => 'tests/image.test',
            17 => 'tests/lock.test',
            18 => 'tests/mail.test',
            19 => 'tests/menu.test',
            20 => 'tests/module.test',
            21 => 'tests/pager.test',
            22 => 'tests/password.test',
            23 => 'tests/path.test',
            24 => 'tests/registry.test',
            25 => 'tests/schema.test',
            26 => 'tests/session.test',
            27 => 'tests/tablesort.test',
            28 => 'tests/theme.test',
            29 => 'tests/unicode.test',
            30 => 'tests/update.test',
            31 => 'tests/xmlrpc.test',
            32 => 'tests/upgrade/upgrade.test',
            33 => 'tests/upgrade/upgrade.comment.test',
            34 => 'tests/upgrade/upgrade.filter.test',
            35 => 'tests/upgrade/upgrade.forum.test',
            36 => 'tests/upgrade/upgrade.locale.test',
            37 => 'tests/upgrade/upgrade.menu.test',
            38 => 'tests/upgrade/upgrade.node.test',
            39 => 'tests/upgrade/upgrade.taxonomy.test',
            40 => 'tests/upgrade/upgrade.trigger.test',
            41 => 'tests/upgrade/upgrade.translatable.test',
            42 => 'tests/upgrade/upgrade.upload.test',
            43 => 'tests/upgrade/upgrade.user.test',
            44 => 'tests/upgrade/update.aggregator.test',
            45 => 'tests/upgrade/update.trigger.test',
            46 => 'tests/upgrade/update.field.test',
            47 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'number' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'list_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/field/modules/list/tests/list_test.module',
        'basename' => 'list_test.module',
        'name' => 'list_test',
        'info' => 
        array (
          'name' => 'List test',
          'description' => 'Support module for the List module tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'list' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'text' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'options' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'field_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/field/tests/field_test.module',
        'basename' => 'field_test.module',
        'name' => 'field_test',
        'info' => 
        array (
          'name' => 'Field API Test',
          'description' => 'Support module for the Field API tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'files' => 
          array (
            0 => 'field_test.entity.inc',
          ),
          'version' => '7.24',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'field' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'field.info.class.inc',
            3 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'book' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'image_module_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/image/tests/image_module_test.module',
        'basename' => 'image_module_test.module',
        'name' => 'image_module_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Provides hook implementations for testing Image module functionality.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'image_module_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'image' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.24',
      ),
    ),
    'themes' => 
    array (
      'seven' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
        ),
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'stark' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
        ),
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'bartik' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
        ),
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'garland' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
        ),
        'project' => 'drupal',
        'version' => '7.24',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.24',
        'description' => 'This platform is running Drupal 7.24',
      ),
    ),
    'profiles' => 
    array (
      'minimal' => 
      array (
        'name' => 'minimal',
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/profiles/minimal/minimal.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.24',
      ),
      'bb' => 
      array (
        'name' => 'bb',
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/profiles/bb/bb.profile',
        'project' => '',
        'info' => 
        array (
          'name' => 'BrightBrain',
          'description' => 'Basic BrightBrain Installation Profile',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'bb.profile',
            1 => 'bb.install',
          ),
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'translation',
            2 => 'field',
            3 => 'field_sql_storage',
            4 => 'file',
            5 => 'filter',
            6 => 'image',
            7 => 'list',
            8 => 'locale',
            9 => 'menu',
            10 => 'node',
            11 => 'options',
            12 => 'path',
            13 => 'system',
            14 => 'taxonomy',
            15 => 'text',
            16 => 'user',
            17 => 'contextual',
            18 => 'comment',
            19 => 'dashboard',
            20 => 'dblog',
            21 => 'field_ui',
            22 => 'number',
            23 => 'rdf',
            24 => 'shortcut',
            25 => 'update',
            26 => 'backup_migrate',
            27 => 'block_class',
            28 => 'libraries',
            29 => 'menu_attributes',
            30 => 'module_filter',
            31 => 'clone',
            32 => 'pathauto',
            33 => 'entity',
            34 => 'token',
            35 => 'admin_menu',
            36 => 'admin_menu_toolbar',
            37 => 'blockcache_alter',
            38 => 'ctools',
            39 => 'features',
            40 => 'autocomplete_deluxe',
            41 => 'ckeditor',
            42 => 'ckeditor_link',
            43 => 'jquery_update',
            44 => 'lightbox2',
            45 => 'imce',
            46 => 'devel',
            47 => 'semanticviews',
            48 => 'views',
            49 => 'views_content_cache',
            50 => 'views_ui',
            51 => 'email',
            52 => 'field_collection',
            53 => 'webform',
          ),
          'version' => NULL,
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
            1 => 'fr',
            2 => 'nl',
          ),
        ),
        'version' => '7.24',
      ),
      'testing' => 
      array (
        'name' => 'testing',
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/profiles/testing/testing.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Minimal profile for running tests. Includes absolutely required modules only.',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.24',
      ),
      'standard' => 
      array (
        'name' => 'standard',
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/profiles/standard/standard.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'version' => '7.24',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'date_repeat_field' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/date/date_repeat_field/date_repeat_field.module',
        'basename' => 'date_repeat_field.module',
        'name' => 'date_repeat_field',
        'info' => 
        array (
          'name' => 'Date Repeat Field',
          'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
            2 => 'date_repeat',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date_repeat_field.css',
            ),
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.7',
          'project' => 'date',
          'datestamp' => '1387659206',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'date_all_day' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/date/date_all_day/date_all_day.module',
        'basename' => 'date_all_day.module',
        'name' => 'date_all_day',
        'info' => 
        array (
          'name' => 'Date All Day',
          'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.7',
          'project' => 'date',
          'datestamp' => '1387659206',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'date_repeat' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/date/date_repeat/date_repeat.module',
        'basename' => 'date_repeat.module',
        'name' => 'date_repeat',
        'info' => 
        array (
          'name' => 'Date Repeat API',
          'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'tests/date_repeat.test',
            1 => 'tests/date_repeat_form.test',
          ),
          'version' => '7.x-2.7',
          'project' => 'date',
          'datestamp' => '1387659206',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'date_tools' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/date/date_tools/date_tools.module',
        'basename' => 'date_tools.module',
        'name' => 'date_tools',
        'info' => 
        array (
          'name' => 'Date Tools',
          'description' => 'Tools to import and auto-create dates and calendars.',
          'dependencies' => 
          array (
            0 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/tools',
          'files' => 
          array (
            0 => 'tests/date_tools.test',
          ),
          'version' => '7.x-2.7',
          'project' => 'date',
          'datestamp' => '1387659206',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'date_api' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/date/date_api/date_api.module',
        'basename' => 'date_api.module',
        'name' => 'date_api',
        'info' => 
        array (
          'name' => 'Date API',
          'description' => 'A Date API that can be used by other modules.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date.css',
            ),
          ),
          'files' => 
          array (
            0 => 'date_api.module',
            1 => 'date_api_sql.inc',
          ),
          'version' => '7.x-2.7',
          'project' => 'date',
          'datestamp' => '1387659206',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7001',
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'date_popup' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/date/date_popup/date_popup.module',
        'basename' => 'date_popup.module',
        'name' => 'date_popup',
        'info' => 
        array (
          'name' => 'Date Popup',
          'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/date_popup',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'themes/datepicker.1.7.css',
            ),
          ),
          'version' => '7.x-2.7',
          'project' => 'date',
          'datestamp' => '1387659206',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'date_migrate_example' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/date/date_migrate/date_migrate_example/date_migrate_example.module',
        'basename' => 'date_migrate_example.module',
        'name' => 'date_migrate_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'date_repeat',
            2 => 'date_repeat_field',
            3 => 'features',
            4 => 'migrate',
          ),
          'description' => 'Examples of migrating with the Date module',
          'features' => 
          array (
            'field' => 
            array (
              0 => 'node-date_migrate_example-body',
              1 => 'node-date_migrate_example-field_date',
              2 => 'node-date_migrate_example-field_date_range',
              3 => 'node-date_migrate_example-field_date_repeat',
              4 => 'node-date_migrate_example-field_datestamp',
              5 => 'node-date_migrate_example-field_datestamp_range',
              6 => 'node-date_migrate_example-field_datetime',
              7 => 'node-date_migrate_example-field_datetime_range',
            ),
            'node' => 
            array (
              0 => 'date_migrate_example',
            ),
          ),
          'files' => 
          array (
            0 => 'date_migrate_example.migrate.inc',
          ),
          'name' => 'Date Migration Example',
          'package' => 'Features',
          'project' => 'date',
          'version' => '7.x-2.7',
          'datestamp' => '1387659206',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'date_migrate' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/date/date_migrate/date_migrate.module',
        'basename' => 'date_migrate.module',
        'name' => 'date_migrate',
        'info' => 
        array (
          'name' => 'Date Migration',
          'description' => 'Obsolete data migration module. Disable if no other modules depend on it.',
          'core' => '7.x',
          'package' => 'Date/Time',
          'hidden' => true,
          'version' => '7.x-2.7',
          'project' => 'date',
          'datestamp' => '1387659206',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'date_views' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/date/date_views/date_views.module',
        'basename' => 'date_views.module',
        'name' => 'date_views',
        'info' => 
        array (
          'name' => 'Date Views',
          'description' => 'Views integration for date fields and date functionality.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'views',
          ),
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'includes/date_views_argument_handler.inc',
            1 => 'includes/date_views_argument_handler_simple.inc',
            2 => 'includes/date_views_filter_handler.inc',
            3 => 'includes/date_views_filter_handler_simple.inc',
            4 => 'includes/date_views.views.inc',
            5 => 'includes/date_views_plugin_pager.inc',
          ),
          'version' => '7.x-2.7',
          'project' => 'date',
          'datestamp' => '1387659206',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'date_context' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/date/date_context/date_context.module',
        'basename' => 'date_context.module',
        'name' => 'date_context',
        'info' => 
        array (
          'name' => 'Date Context',
          'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'context',
          ),
          'files' => 
          array (
            0 => 'date_context.module',
            1 => 'plugins/date_context_date_condition.inc',
          ),
          'version' => '7.x-2.7',
          'project' => 'date',
          'datestamp' => '1387659206',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'date' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/date/date.module',
        'basename' => 'date.module',
        'name' => 'date',
        'info' => 
        array (
          'name' => 'Date',
          'description' => 'Makes date/time fields available.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'date.migrate.inc',
            1 => 'tests/date_api.test',
            2 => 'tests/date.test',
            3 => 'tests/date_field.test',
            4 => 'tests/date_migrate.test',
            5 => 'tests/date_validation.test',
            6 => 'tests/date_timezone.test',
          ),
          'version' => '7.x-2.7',
          'project' => 'date',
          'datestamp' => '1387659206',
        ),
        'schema_version' => '7004',
        'project' => 'date',
        'version' => '7.x-2.7',
      ),
      'block_class' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/block_class/block_class.module',
        'basename' => 'block_class.module',
        'name' => 'block_class',
        'info' => 
        array (
          'name' => 'Block Class',
          'description' => 'Allows assigning CSS classes to blocks.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'files' => 
          array (
            0 => 'block_class.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'context',
          ),
          'version' => '7.x-2.1',
          'project' => 'block_class',
          'datestamp' => '1377197769',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'project' => 'block_class',
        'version' => '7.x-2.1',
      ),
      'lightbox2' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/lightbox2/lightbox2.module',
        'basename' => 'lightbox2.module',
        'name' => 'lightbox2',
        'info' => 
        array (
          'name' => 'Lightbox2',
          'description' => 'Enables Lightbox2 for Drupal',
          'core' => '7.x',
          'package' => 'User interface',
          'files' => 
          array (
            0 => 'lightbox2.install',
            1 => 'lightbox2.module',
            2 => 'lightbox2.formatter.inc',
            3 => 'lightbox2.admin.inc',
          ),
          'configure' => 'admin/config/user-interface/lightbox2',
          'version' => '7.x-1.0-beta1',
          'project' => 'lightbox2',
          'datestamp' => '1318819001',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6003',
        'project' => 'lightbox2',
        'version' => '7.x-1.0-beta1',
      ),
      'node_reference' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/references/node_reference/node_reference.module',
        'basename' => 'node_reference.module',
        'name' => 'node_reference',
        'info' => 
        array (
          'name' => 'Node Reference',
          'description' => 'Defines a field type for referencing one node from another.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'references',
            2 => 'options',
          ),
          'files' => 
          array (
            0 => 'node_reference.test',
          ),
          'version' => '7.x-2.1',
          'project' => 'references',
          'datestamp' => '1360265821',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'references',
        'version' => '7.x-2.1',
      ),
      'user_reference' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/references/user_reference/user_reference.module',
        'basename' => 'user_reference.module',
        'name' => 'user_reference',
        'info' => 
        array (
          'name' => 'User Reference',
          'description' => 'Defines a field type for referencing a user from a node.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'references',
            2 => 'options',
          ),
          'version' => '7.x-2.1',
          'project' => 'references',
          'datestamp' => '1360265821',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'references',
        'version' => '7.x-2.1',
      ),
      'references' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/references/references.module',
        'basename' => 'references.module',
        'name' => 'references',
        'info' => 
        array (
          'name' => 'References',
          'description' => 'Defines common base features for the various reference field types.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'views/references_handler_relationship.inc',
            1 => 'views/references_handler_argument.inc',
            2 => 'views/references_plugin_display.inc',
            3 => 'views/references_plugin_style.inc',
            4 => 'views/references_plugin_row_fields.inc',
          ),
          'version' => '7.x-2.1',
          'project' => 'references',
          'datestamp' => '1360265821',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'references',
        'version' => '7.x-2.1',
      ),
      'devel_generate' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'devel_generate',
        'info' => 
        array (
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, and taxonomy terms.',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'devel',
          ),
          'tags' => 
          array (
            0 => 'developer',
          ),
          'configure' => 'admin/config/development/generate',
          'version' => '7.x-1.3',
          'project' => 'devel',
          'datestamp' => '1338940281',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.3',
      ),
      'devel' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'devel',
        'info' => 
        array (
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'files' => 
          array (
            0 => 'devel.test',
            1 => 'devel.mail.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'devel',
          'datestamp' => '1338940281',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'devel',
        'version' => '7.x-1.3',
      ),
      'devel_node_access' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/devel/devel_node_access.module',
        'basename' => 'devel_node_access.module',
        'name' => 'devel_node_access',
        'info' => 
        array (
          'name' => 'Devel node access',
          'description' => 'Developer blocks and page illustrating relevant node_access records.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '7.x-1.3',
          'project' => 'devel',
          'datestamp' => '1338940281',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.3',
      ),
      'translation_overview' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/translation_overview/translation_overview.module',
        'basename' => 'translation_overview.module',
        'name' => 'translation_overview',
        'info' => 
        array (
          'name' => 'Translation overview',
          'description' => 'Provides an overview of the translation status of the site\'s content.',
          'dependencies' => 
          array (
            0 => 'translation',
          ),
          'core' => '7.x',
          'php' => '5.1',
          'package' => 'Multilanguage',
          'files' => 
          array (
            0 => 'translation_overview.install',
            1 => 'translation_overview.module',
            2 => 'translation_overview.pages.inc',
            3 => 'translation_overview.test',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'translation_overview',
          'datestamp' => '1306699318',
        ),
        'schema_version' => '6002',
        'project' => 'translation_overview',
        'version' => '7.x-2.0-beta1',
      ),
      'devel_themer' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/devel_themer/devel_themer.module',
        'basename' => 'devel_themer.module',
        'name' => 'devel_themer',
        'info' => 
        array (
          'name' => 'Theme developer',
          'description' => 'Essential theme API information for theme developers',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'devel',
            1 => 'simplehtmldom',
          ),
          'configure' => 'admin/config/development/devel_themer',
          'files' => 
          array (
            0 => 'devel_themer.module',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'devel_themer',
          'datestamp' => '1380804859',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'project' => 'devel_themer',
        'version' => '7.x-1.x-dev',
      ),
      'jquery_update' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/jquery_update/jquery_update.module',
        'basename' => 'jquery_update.module',
        'name' => 'jquery_update',
        'info' => 
        array (
          'name' => 'jQuery Update',
          'description' => 'Update jQuery and jQuery UI to a more recent version.',
          'package' => 'User interface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jquery_update.module',
            1 => 'jquery_update.install',
          ),
          'configure' => 'admin/config/development/jquery_update',
          'version' => '7.x-2.3',
          'project' => 'jquery_update',
          'datestamp' => '1360375905',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'jquery_update',
        'version' => '7.x-2.3',
      ),
      'draggableviews_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/draggableviews/test/draggableviews_test/draggableviews_test.module',
        'basename' => 'draggableviews_test.module',
        'name' => 'draggableviews_test',
        'info' => 
        array (
          'name' => 'Draggableviews Test',
          'description' => 'Provides views for testing.',
          'dependencies' => 
          array (
            0 => 'draggableviews',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-2.0',
          'project' => 'draggableviews',
          'datestamp' => '1338282056',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'draggableviews',
        'version' => '7.x-2.0',
      ),
      'draggableviews' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/draggableviews/draggableviews.module',
        'basename' => 'draggableviews.module',
        'name' => 'draggableviews',
        'info' => 
        array (
          'name' => 'Draggableviews',
          'description' => 'Makes Views draggable',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'entity',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'handlers/draggableviews_handler.inc',
            1 => 'handlers/draggableviews_handler_native.inc',
            2 => 'handlers/draggableviews_handler_fieldapi.inc',
            3 => 'views/draggableviews_handler_field_draggable.inc',
            4 => 'views/draggableviews_handler_sort.inc',
            5 => 'views/draggableviews_join_handler.inc',
            6 => 'test/draggableviews.test',
          ),
          'version' => '7.x-2.0',
          'project' => 'draggableviews',
          'datestamp' => '1338282056',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'draggableviews',
        'version' => '7.x-2.0',
      ),
      'boost_crawler' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/boost/boost_crawler/boost_crawler.module',
        'basename' => 'boost_crawler.module',
        'name' => 'boost_crawler',
        'info' => 
        array (
          'name' => 'Boost Crawler',
          'description' => 'Minimal crawler to regenerate the cache as pages are expired.',
          'package' => 'Performance and scalability',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'boost_crawler.module',
          ),
          'recommends' => 
          array (
            0 => 'boost',
          ),
          'dependencies' => 
          array (
            0 => 'httprl',
          ),
          'configure' => 'admin/config/system/boost/crawler',
          'version' => '7.x-1.0-beta2',
          'project' => 'boost',
          'datestamp' => '1345176104',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'boost',
        'version' => '7.x-1.0-beta2',
      ),
      'boost' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/boost/boost.module',
        'basename' => 'boost.module',
        'name' => 'boost',
        'info' => 
        array (
          'name' => 'Boost',
          'description' => 'Caches generated output as a static file to be served directly from the webserver.',
          'package' => 'Performance and scalability',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'boost.module',
            1 => 'boost.admin.inc',
            2 => 'boost.blocks.inc',
          ),
          'configure' => 'admin/config/system/boost',
          'version' => '7.x-1.0-beta2',
          'project' => 'boost',
          'datestamp' => '1345176104',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'boost',
        'version' => '7.x-1.0-beta2',
      ),
      'mollom_test_server' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/mollom/tests/mollom_test_server.module',
        'basename' => 'mollom_test_server.module',
        'name' => 'mollom_test_server',
        'info' => 
        array (
          'name' => 'Mollom Test Server',
          'description' => 'Testing Server module for Mollom functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'version' => '7.x-2.8',
          'project' => 'mollom',
          'datestamp' => '1384108410',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mollom',
        'version' => '7.x-2.8',
      ),
      'mollom_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/mollom/tests/mollom_test.module',
        'basename' => 'mollom_test.module',
        'name' => 'mollom_test',
        'info' => 
        array (
          'name' => 'Mollom Test',
          'description' => 'Testing module for Mollom functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'version' => '7.x-2.8',
          'project' => 'mollom',
          'datestamp' => '1384108410',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mollom',
        'version' => '7.x-2.8',
      ),
      'mollom' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/mollom/mollom.module',
        'basename' => 'mollom.module',
        'name' => 'mollom',
        'info' => 
        array (
          'name' => 'Mollom',
          'description' => 'Automatically moderates user-submitted content and protects your site from spam and profanity.',
          'core' => '7.x',
          'configure' => 'admin/config/content/mollom',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'mollom.css',
            ),
          ),
          'files' => 
          array (
            0 => 'includes/mollom.class.inc',
            1 => 'mollom.drupal.inc',
            2 => 'tests/mollom.test',
            3 => 'tests/mollom.class.test',
          ),
          'version' => '7.x-2.8',
          'project' => 'mollom',
          'datestamp' => '1384108410',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7210',
        'project' => 'mollom',
        'version' => '7.x-2.8',
      ),
      'features_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/features/tests/features_test/features_test.module',
        'basename' => 'features_test.module',
        'name' => 'features_test',
        'info' => 
        array (
          'name' => 'Features Tests',
          'description' => 'Test module for Features testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'php' => '5.2.0',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'image',
            2 => 'strongarm',
            3 => 'taxonomy',
            4 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'field_features_test',
            ),
            'field_instance' => 
            array (
              0 => 'node-features_test-field_features_test',
            ),
            'filter' => 
            array (
              0 => 'features_test',
            ),
            'image' => 
            array (
              0 => 'features_test',
            ),
            'node' => 
            array (
              0 => 'features_test',
            ),
            'taxonomy' => 
            array (
              0 => 'taxonomy_features_test',
            ),
            'user_permission' => 
            array (
              0 => 'create features_test content',
            ),
            'views_view' => 
            array (
              0 => 'features_test',
            ),
          ),
          'hidden' => '1',
          'version' => '7.x-2.0',
          'project' => 'features',
          'datestamp' => '1382018758',
        ),
        'schema_version' => 0,
        'project' => 'features',
        'version' => '7.x-2.0',
      ),
      'features' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/features/features.module',
        'basename' => 'features.module',
        'name' => 'features',
        'info' => 
        array (
          'name' => 'Features',
          'description' => 'Provides feature management for Drupal.',
          'core' => '7.x',
          'package' => 'Features',
          'files' => 
          array (
            0 => 'tests/features.test',
          ),
          'configure' => 'admin/structure/features/settings',
          'version' => '7.x-2.0',
          'project' => 'features',
          'datestamp' => '1382018758',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'features',
        'version' => '7.x-2.0',
      ),
      'backup_migrate' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/backup_migrate/backup_migrate.module',
        'basename' => 'backup_migrate.module',
        'name' => 'backup_migrate',
        'info' => 
        array (
          'name' => 'Backup and Migrate',
          'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'backup_migrate.module',
            1 => 'backup_migrate.install',
            2 => 'includes/destinations.inc',
            3 => 'includes/profiles.inc',
            4 => 'includes/schedules.inc',
          ),
          'configure' => 'admin/config/system/backup_migrate',
          'version' => '7.x-2.8',
          'project' => 'backup_migrate',
          'datestamp' => '1383686305',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'project' => 'backup_migrate',
        'version' => '7.x-2.8',
      ),
      'autocomplete_deluxe' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/autocomplete_deluxe/autocomplete_deluxe.module',
        'basename' => 'autocomplete_deluxe.module',
        'name' => 'autocomplete_deluxe',
        'info' => 
        array (
          'name' => 'Autocomplete Deluxe',
          'description' => 'Enhanced autocomplete using Jquery UI autocomplete.',
          'package' => 'User interface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'autocomplete_deluxe.module',
          ),
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'version' => '7.x-2.0-beta3',
          'project' => 'autocomplete_deluxe',
          'datestamp' => '1375695669',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'autocomplete_deluxe',
        'version' => '7.x-2.0-beta3',
      ),
      'l10n_update' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/l10n_update/l10n_update.module',
        'basename' => 'l10n_update.module',
        'name' => 'l10n_update',
        'info' => 
        array (
          'name' => 'Localization update',
          'description' => 'Provides automatic downloads and updates for translations.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'core' => '7.x',
          'package' => 'Multilingual',
          'files' => 
          array (
            0 => 'l10n_update.admin.inc',
            1 => 'l10n_update.api.php',
            2 => 'l10n_update.batch.inc',
            3 => 'l10n_update.check.inc',
            4 => 'l10n_update.drush.inc',
            5 => 'l10n_update.inc',
            6 => 'l10n_update.install',
            7 => 'l10n_update.locale.inc',
            8 => 'l10n_update.module',
            9 => 'l10n_update.parser.inc',
            10 => 'l10n_update.project.inc',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'l10n_update',
          'datestamp' => '1328563848',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'l10n_update',
        'version' => '7.x-1.0-beta3',
      ),
      'colorbox' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/colorbox/colorbox.module',
        'basename' => 'colorbox.module',
        'name' => 'colorbox',
        'info' => 
        array (
          'name' => 'Colorbox',
          'description' => 'A light-weight, customizable lightbox plugin for jQuery 1.4.3+.',
          'dependencies' => 
          array (
            0 => 'libraries (2.x)',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/media/colorbox',
          'files' => 
          array (
            0 => 'views/colorbox_handler_field_colorbox.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'colorbox',
          'datestamp' => '1385815706',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'colorbox',
        'version' => '7.x-2.5',
      ),
      'googleanalytics' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/google_analytics/googleanalytics.module',
        'basename' => 'googleanalytics.module',
        'name' => 'googleanalytics',
        'info' => 
        array (
          'name' => 'Google Analytics',
          'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
          'core' => '7.x',
          'package' => 'Statistics',
          'configure' => 'admin/config/system/googleanalytics',
          'files' => 
          array (
            0 => 'googleanalytics.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'version' => '7.x-1.4',
          'project' => 'google_analytics',
          'datestamp' => '1382021586',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7007',
        'project' => 'google_analytics',
        'version' => '7.x-1.4',
      ),
      'rules_scheduler_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/rules/rules_scheduler/tests/rules_scheduler_test.module',
        'basename' => 'rules_scheduler_test.module',
        'name' => 'rules_scheduler_test',
        'info' => 
        array (
          'name' => 'Rules Scheduler Tests',
          'description' => 'Support module for the Rules Scheduler tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_scheduler_test.inc',
          ),
          'hidden' => true,
          'version' => '7.x-2.6',
          'project' => 'rules',
          'datestamp' => '1383063052',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.6',
      ),
      'rules_scheduler' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/rules/rules_scheduler/rules_scheduler.module',
        'basename' => 'rules_scheduler.module',
        'name' => 'rules_scheduler',
        'info' => 
        array (
          'name' => 'Rules Scheduler',
          'description' => 'Schedule the execution of Rules components using actions.',
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_scheduler.admin.inc',
            1 => 'rules_scheduler.module',
            2 => 'rules_scheduler.install',
            3 => 'rules_scheduler.rules.inc',
            4 => 'rules_scheduler.test',
            5 => 'includes/rules_scheduler.handler.inc',
            6 => 'includes/rules_scheduler.views_default.inc',
            7 => 'includes/rules_scheduler.views.inc',
            8 => 'includes/rules_scheduler_views_filter.inc',
          ),
          'version' => '7.x-2.6',
          'project' => 'rules',
          'datestamp' => '1383063052',
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'project' => 'rules',
        'version' => '7.x-2.6',
      ),
      'rules_i18n' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/rules/rules_i18n/rules_i18n.module',
        'basename' => 'rules_i18n.module',
        'name' => 'rules_i18n',
        'info' => 
        array (
          'name' => 'Rules translation',
          'description' => 'Allows translating rules.',
          'dependencies' => 
          array (
            0 => 'rules',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_i18n.i18n.inc',
            1 => 'rules_i18n.rules.inc',
            2 => 'rules_i18n.test',
          ),
          'version' => '7.x-2.6',
          'project' => 'rules',
          'datestamp' => '1383063052',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.6',
      ),
      'rules_admin' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/rules/rules_admin/rules_admin.module',
        'basename' => 'rules_admin.module',
        'name' => 'rules_admin',
        'info' => 
        array (
          'name' => 'Rules UI',
          'description' => 'Administrative interface for managing rules.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_admin.module',
            1 => 'rules_admin.inc',
          ),
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'version' => '7.x-2.6',
          'project' => 'rules',
          'datestamp' => '1383063052',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.6',
      ),
      'rules_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/rules/tests/rules_test.module',
        'basename' => 'rules_test.module',
        'name' => 'rules_test',
        'info' => 
        array (
          'name' => 'Rules Tests',
          'description' => 'Support module for the Rules tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_test.rules.inc',
            1 => 'rules_test.rules_defaults.inc',
          ),
          'hidden' => true,
          'version' => '7.x-2.6',
          'project' => 'rules',
          'datestamp' => '1383063052',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.6',
      ),
      'rules' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/rules/rules.module',
        'basename' => 'rules.module',
        'name' => 'rules',
        'info' => 
        array (
          'name' => 'Rules',
          'description' => 'React on events and conditionally evaluate actions.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules.features.inc',
            1 => 'tests/rules.test',
            2 => 'includes/faces.inc',
            3 => 'includes/rules.core.inc',
            4 => 'includes/rules.event.inc',
            5 => 'includes/rules.processor.inc',
            6 => 'includes/rules.plugins.inc',
            7 => 'includes/rules.state.inc',
            8 => 'includes/rules.dispatcher.inc',
            9 => 'modules/node.eval.inc',
            10 => 'modules/php.eval.inc',
            11 => 'modules/rules_core.eval.inc',
            12 => 'modules/system.eval.inc',
            13 => 'ui/ui.controller.inc',
            14 => 'ui/ui.core.inc',
            15 => 'ui/ui.data.inc',
            16 => 'ui/ui.plugins.inc',
          ),
          'dependencies' => 
          array (
            0 => 'entity_token',
            1 => 'entity',
          ),
          'version' => '7.x-2.6',
          'project' => 'rules',
          'datestamp' => '1383063052',
          'php' => '5.2.4',
        ),
        'schema_version' => '7213',
        'project' => 'rules',
        'version' => '7.x-2.6',
      ),
      'stringoverrides_migrate' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/stringoverrides/stringoverrides_migrate.module',
        'basename' => 'stringoverrides_migrate.module',
        'name' => 'stringoverrides_migrate',
        'info' => 
        array (
          'name' => 'String Overrides Migrate',
          'description' => 'Tools for importing and exporting string override settings.',
          'dependencies' => 
          array (
            0 => 'stringoverrides',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'stringoverrides_migrate.module',
            1 => 'stringoverrides_migrate.admin.inc',
          ),
          'version' => '7.x-1.8',
          'project' => 'stringoverrides',
          'datestamp' => '1304446316',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'stringoverrides',
        'version' => '7.x-1.8',
      ),
      'stringoverrides' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/stringoverrides/stringoverrides.module',
        'basename' => 'stringoverrides.module',
        'name' => 'stringoverrides',
        'info' => 
        array (
          'name' => 'String Overrides',
          'description' => 'Provides a quick and easy way of replacing text.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'stringoverrides.module',
            1 => 'stringoverrides.install',
            2 => 'stringoverrides.admin.inc',
          ),
          'configure' => 'admin/config/regional/stringoverrides',
          'version' => '7.x-1.8',
          'project' => 'stringoverrides',
          'datestamp' => '1304446316',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'stringoverrides',
        'version' => '7.x-1.8',
      ),
      'webform' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/webform/webform.module',
        'basename' => 'webform.module',
        'name' => 'webform',
        'info' => 
        array (
          'name' => 'Webform',
          'description' => 'Enables the creation of forms and questionnaires.',
          'core' => '7.x',
          'package' => 'Webform',
          'configure' => 'admin/config/content/webform',
          'files' => 
          array (
            0 => 'includes/webform.export.inc',
            1 => 'views/webform_handler_field_form_body.inc',
            2 => 'views/webform_handler_field_is_draft.inc',
            3 => 'views/webform_handler_field_node_link_edit.inc',
            4 => 'views/webform_handler_field_node_link_results.inc',
            5 => 'views/webform_handler_field_submission_count.inc',
            6 => 'views/webform_handler_field_submission_link.inc',
            7 => 'views/webform_handler_field_webform_status.inc',
            8 => 'views/webform_handler_filter_is_draft.inc',
            9 => 'views/webform_handler_filter_webform_status.inc',
            10 => 'views/webform.views.inc',
            11 => 'tests/components.test',
            12 => 'tests/permissions.test',
            13 => 'tests/submission.test',
            14 => 'tests/webform.test',
          ),
          'version' => '7.x-3.19',
          'project' => 'webform',
          'datestamp' => '1369860079',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7321',
        'project' => 'webform',
        'version' => '7.x-3.19',
      ),
      'clone' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/node_clone/clone.module',
        'basename' => 'clone.module',
        'name' => 'clone',
        'info' => 
        array (
          'name' => 'Node clone',
          'description' => 'Allows users to clone (copy then edit) an existing node.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views/views_handler_field_node_link_clone.inc',
          ),
          'configure' => 'admin/config/content/clone',
          'version' => '7.x-1.0-rc2',
          'project' => 'node_clone',
          'datestamp' => '1386176910',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_clone',
        'version' => '7.x-1.0-rc2',
      ),
      'modernizr' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/modernizr/modernizr.module',
        'basename' => 'modernizr.module',
        'name' => 'modernizr',
        'info' => 
        array (
          'name' => 'Modernizr',
          'description' => 'Modernizr integration for Drupal. Extends the library by providing two APIs: (1) for test management (2) for exposing Modernizr.load() to Drupal',
          'core' => '7.x',
          'package' => 'Frontend',
          'configure' => 'admin/config/development/modernizr',
          'files' => 
          array (
            0 => 'modernizr.module',
            1 => 'modernizr.install',
            2 => 'modernizr.admin.inc',
            3 => 'modernizr.args.inc',
          ),
          'version' => '7.x-3.1',
          'project' => 'modernizr',
          'datestamp' => '1368683711',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'project' => 'modernizr',
        'version' => '7.x-3.1',
      ),
      'views_export' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'views_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/views/tests/views_test.module',
        'basename' => 'views_test.module',
        'name' => 'views_test',
        'info' => 
        array (
          'name' => 'Views Test',
          'description' => 'Test module for Views.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'hidden' => true,
          'version' => '7.x-3.7',
          'project' => 'views',
          'datestamp' => '1365499236',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.7',
      ),
      'views_ui' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '7.x',
          'configure' => 'admin/structure/views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_ui.module',
            1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
          ),
          'version' => '7.x-3.7',
          'project' => 'views',
          'datestamp' => '1365499236',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.7',
      ),
      'views' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/views.css',
            ),
          ),
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_area.inc',
            1 => 'handlers/views_handler_area_result.inc',
            2 => 'handlers/views_handler_area_text.inc',
            3 => 'handlers/views_handler_area_text_custom.inc',
            4 => 'handlers/views_handler_area_view.inc',
            5 => 'handlers/views_handler_argument.inc',
            6 => 'handlers/views_handler_argument_date.inc',
            7 => 'handlers/views_handler_argument_formula.inc',
            8 => 'handlers/views_handler_argument_many_to_one.inc',
            9 => 'handlers/views_handler_argument_null.inc',
            10 => 'handlers/views_handler_argument_numeric.inc',
            11 => 'handlers/views_handler_argument_string.inc',
            12 => 'handlers/views_handler_argument_group_by_numeric.inc',
            13 => 'handlers/views_handler_field.inc',
            14 => 'handlers/views_handler_field_counter.inc',
            15 => 'handlers/views_handler_field_boolean.inc',
            16 => 'handlers/views_handler_field_contextual_links.inc',
            17 => 'handlers/views_handler_field_custom.inc',
            18 => 'handlers/views_handler_field_date.inc',
            19 => 'handlers/views_handler_field_entity.inc',
            20 => 'handlers/views_handler_field_markup.inc',
            21 => 'handlers/views_handler_field_math.inc',
            22 => 'handlers/views_handler_field_numeric.inc',
            23 => 'handlers/views_handler_field_prerender_list.inc',
            24 => 'handlers/views_handler_field_time_interval.inc',
            25 => 'handlers/views_handler_field_serialized.inc',
            26 => 'handlers/views_handler_field_machine_name.inc',
            27 => 'handlers/views_handler_field_url.inc',
            28 => 'handlers/views_handler_filter.inc',
            29 => 'handlers/views_handler_filter_boolean_operator.inc',
            30 => 'handlers/views_handler_filter_boolean_operator_string.inc',
            31 => 'handlers/views_handler_filter_combine.inc',
            32 => 'handlers/views_handler_filter_date.inc',
            33 => 'handlers/views_handler_filter_equality.inc',
            34 => 'handlers/views_handler_filter_entity_bundle.inc',
            35 => 'handlers/views_handler_filter_group_by_numeric.inc',
            36 => 'handlers/views_handler_filter_in_operator.inc',
            37 => 'handlers/views_handler_filter_many_to_one.inc',
            38 => 'handlers/views_handler_filter_numeric.inc',
            39 => 'handlers/views_handler_filter_string.inc',
            40 => 'handlers/views_handler_relationship.inc',
            41 => 'handlers/views_handler_relationship_groupwise_max.inc',
            42 => 'handlers/views_handler_sort.inc',
            43 => 'handlers/views_handler_sort_date.inc',
            44 => 'handlers/views_handler_sort_formula.inc',
            45 => 'handlers/views_handler_sort_group_by_numeric.inc',
            46 => 'handlers/views_handler_sort_menu_hierarchy.inc',
            47 => 'handlers/views_handler_sort_random.inc',
            48 => 'includes/base.inc',
            49 => 'includes/handlers.inc',
            50 => 'includes/plugins.inc',
            51 => 'includes/view.inc',
            52 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
            53 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
            54 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
            55 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
            56 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
            57 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
            58 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
            59 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
            60 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
            61 => 'modules/book/views_plugin_argument_default_book_root.inc',
            62 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
            63 => 'modules/comment/views_handler_field_comment.inc',
            64 => 'modules/comment/views_handler_field_comment_depth.inc',
            65 => 'modules/comment/views_handler_field_comment_link.inc',
            66 => 'modules/comment/views_handler_field_comment_link_approve.inc',
            67 => 'modules/comment/views_handler_field_comment_link_delete.inc',
            68 => 'modules/comment/views_handler_field_comment_link_edit.inc',
            69 => 'modules/comment/views_handler_field_comment_link_reply.inc',
            70 => 'modules/comment/views_handler_field_comment_node_link.inc',
            71 => 'modules/comment/views_handler_field_comment_username.inc',
            72 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
            73 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
            74 => 'modules/comment/views_handler_field_node_comment.inc',
            75 => 'modules/comment/views_handler_field_node_new_comments.inc',
            76 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
            77 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
            78 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
            79 => 'modules/comment/views_handler_filter_node_comment.inc',
            80 => 'modules/comment/views_handler_sort_comment_thread.inc',
            81 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
            82 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
            83 => 'modules/comment/views_plugin_row_comment_rss.inc',
            84 => 'modules/comment/views_plugin_row_comment_view.inc',
            85 => 'modules/contact/views_handler_field_contact_link.inc',
            86 => 'modules/field/views_handler_field_field.inc',
            87 => 'modules/field/views_handler_relationship_entity_reverse.inc',
            88 => 'modules/field/views_handler_argument_field_list.inc',
            89 => 'modules/field/views_handler_argument_field_list_string.inc',
            90 => 'modules/field/views_handler_filter_field_list.inc',
            91 => 'modules/filter/views_handler_field_filter_format_name.inc',
            92 => 'modules/locale/views_handler_field_node_language.inc',
            93 => 'modules/locale/views_handler_filter_node_language.inc',
            94 => 'modules/locale/views_handler_argument_locale_group.inc',
            95 => 'modules/locale/views_handler_argument_locale_language.inc',
            96 => 'modules/locale/views_handler_field_locale_group.inc',
            97 => 'modules/locale/views_handler_field_locale_language.inc',
            98 => 'modules/locale/views_handler_field_locale_link_edit.inc',
            99 => 'modules/locale/views_handler_filter_locale_group.inc',
            100 => 'modules/locale/views_handler_filter_locale_language.inc',
            101 => 'modules/locale/views_handler_filter_locale_version.inc',
            102 => 'modules/node/views_handler_argument_dates_various.inc',
            103 => 'modules/node/views_handler_argument_node_language.inc',
            104 => 'modules/node/views_handler_argument_node_nid.inc',
            105 => 'modules/node/views_handler_argument_node_type.inc',
            106 => 'modules/node/views_handler_argument_node_vid.inc',
            107 => 'modules/node/views_handler_argument_node_uid_revision.inc',
            108 => 'modules/node/views_handler_field_history_user_timestamp.inc',
            109 => 'modules/node/views_handler_field_node.inc',
            110 => 'modules/node/views_handler_field_node_link.inc',
            111 => 'modules/node/views_handler_field_node_link_delete.inc',
            112 => 'modules/node/views_handler_field_node_link_edit.inc',
            113 => 'modules/node/views_handler_field_node_revision.inc',
            114 => 'modules/node/views_handler_field_node_revision_link.inc',
            115 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
            116 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
            117 => 'modules/node/views_handler_field_node_path.inc',
            118 => 'modules/node/views_handler_field_node_type.inc',
            119 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
            120 => 'modules/node/views_handler_filter_node_access.inc',
            121 => 'modules/node/views_handler_filter_node_status.inc',
            122 => 'modules/node/views_handler_filter_node_type.inc',
            123 => 'modules/node/views_handler_filter_node_uid_revision.inc',
            124 => 'modules/node/views_plugin_argument_default_node.inc',
            125 => 'modules/node/views_plugin_argument_validate_node.inc',
            126 => 'modules/node/views_plugin_row_node_rss.inc',
            127 => 'modules/node/views_plugin_row_node_view.inc',
            128 => 'modules/profile/views_handler_field_profile_date.inc',
            129 => 'modules/profile/views_handler_field_profile_list.inc',
            130 => 'modules/profile/views_handler_filter_profile_selection.inc',
            131 => 'modules/search/views_handler_argument_search.inc',
            132 => 'modules/search/views_handler_field_search_score.inc',
            133 => 'modules/search/views_handler_filter_search.inc',
            134 => 'modules/search/views_handler_sort_search_score.inc',
            135 => 'modules/search/views_plugin_row_search_view.inc',
            136 => 'modules/statistics/views_handler_field_accesslog_path.inc',
            137 => 'modules/system/views_handler_argument_file_fid.inc',
            138 => 'modules/system/views_handler_field_file.inc',
            139 => 'modules/system/views_handler_field_file_extension.inc',
            140 => 'modules/system/views_handler_field_file_filemime.inc',
            141 => 'modules/system/views_handler_field_file_uri.inc',
            142 => 'modules/system/views_handler_field_file_status.inc',
            143 => 'modules/system/views_handler_filter_file_status.inc',
            144 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
            145 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
            146 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
            147 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
            148 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
            149 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
            150 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
            151 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
            152 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
            153 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
            154 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
            155 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
            156 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
            157 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
            158 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
            159 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
            160 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
            161 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
            162 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
            163 => 'modules/system/views_handler_filter_system_type.inc',
            164 => 'modules/translation/views_handler_argument_node_tnid.inc',
            165 => 'modules/translation/views_handler_field_node_link_translate.inc',
            166 => 'modules/translation/views_handler_field_node_translation_link.inc',
            167 => 'modules/translation/views_handler_filter_node_tnid.inc',
            168 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
            169 => 'modules/translation/views_handler_relationship_translation.inc',
            170 => 'modules/user/views_handler_argument_user_uid.inc',
            171 => 'modules/user/views_handler_argument_users_roles_rid.inc',
            172 => 'modules/user/views_handler_field_user.inc',
            173 => 'modules/user/views_handler_field_user_language.inc',
            174 => 'modules/user/views_handler_field_user_link.inc',
            175 => 'modules/user/views_handler_field_user_link_cancel.inc',
            176 => 'modules/user/views_handler_field_user_link_edit.inc',
            177 => 'modules/user/views_handler_field_user_mail.inc',
            178 => 'modules/user/views_handler_field_user_name.inc',
            179 => 'modules/user/views_handler_field_user_permissions.inc',
            180 => 'modules/user/views_handler_field_user_picture.inc',
            181 => 'modules/user/views_handler_field_user_roles.inc',
            182 => 'modules/user/views_handler_filter_user_current.inc',
            183 => 'modules/user/views_handler_filter_user_name.inc',
            184 => 'modules/user/views_handler_filter_user_permissions.inc',
            185 => 'modules/user/views_handler_filter_user_roles.inc',
            186 => 'modules/user/views_plugin_argument_default_current_user.inc',
            187 => 'modules/user/views_plugin_argument_default_user.inc',
            188 => 'modules/user/views_plugin_argument_validate_user.inc',
            189 => 'modules/user/views_plugin_row_user_view.inc',
            190 => 'plugins/views_plugin_access.inc',
            191 => 'plugins/views_plugin_access_none.inc',
            192 => 'plugins/views_plugin_access_perm.inc',
            193 => 'plugins/views_plugin_access_role.inc',
            194 => 'plugins/views_plugin_argument_default.inc',
            195 => 'plugins/views_plugin_argument_default_php.inc',
            196 => 'plugins/views_plugin_argument_default_fixed.inc',
            197 => 'plugins/views_plugin_argument_default_raw.inc',
            198 => 'plugins/views_plugin_argument_validate.inc',
            199 => 'plugins/views_plugin_argument_validate_numeric.inc',
            200 => 'plugins/views_plugin_argument_validate_php.inc',
            201 => 'plugins/views_plugin_cache.inc',
            202 => 'plugins/views_plugin_cache_none.inc',
            203 => 'plugins/views_plugin_cache_time.inc',
            204 => 'plugins/views_plugin_display.inc',
            205 => 'plugins/views_plugin_display_attachment.inc',
            206 => 'plugins/views_plugin_display_block.inc',
            207 => 'plugins/views_plugin_display_default.inc',
            208 => 'plugins/views_plugin_display_embed.inc',
            209 => 'plugins/views_plugin_display_extender.inc',
            210 => 'plugins/views_plugin_display_feed.inc',
            211 => 'plugins/views_plugin_display_page.inc',
            212 => 'plugins/views_plugin_exposed_form_basic.inc',
            213 => 'plugins/views_plugin_exposed_form.inc',
            214 => 'plugins/views_plugin_exposed_form_input_required.inc',
            215 => 'plugins/views_plugin_localization_core.inc',
            216 => 'plugins/views_plugin_localization.inc',
            217 => 'plugins/views_plugin_localization_none.inc',
            218 => 'plugins/views_plugin_pager.inc',
            219 => 'plugins/views_plugin_pager_full.inc',
            220 => 'plugins/views_plugin_pager_mini.inc',
            221 => 'plugins/views_plugin_pager_none.inc',
            222 => 'plugins/views_plugin_pager_some.inc',
            223 => 'plugins/views_plugin_query.inc',
            224 => 'plugins/views_plugin_query_default.inc',
            225 => 'plugins/views_plugin_row.inc',
            226 => 'plugins/views_plugin_row_fields.inc',
            227 => 'plugins/views_plugin_row_rss_fields.inc',
            228 => 'plugins/views_plugin_style.inc',
            229 => 'plugins/views_plugin_style_default.inc',
            230 => 'plugins/views_plugin_style_grid.inc',
            231 => 'plugins/views_plugin_style_list.inc',
            232 => 'plugins/views_plugin_style_jump_menu.inc',
            233 => 'plugins/views_plugin_style_mapping.inc',
            234 => 'plugins/views_plugin_style_rss.inc',
            235 => 'plugins/views_plugin_style_summary.inc',
            236 => 'plugins/views_plugin_style_summary_jump_menu.inc',
            237 => 'plugins/views_plugin_style_summary_unformatted.inc',
            238 => 'plugins/views_plugin_style_table.inc',
            239 => 'tests/handlers/views_handler_area_text.test',
            240 => 'tests/handlers/views_handler_argument_null.test',
            241 => 'tests/handlers/views_handler_argument_string.test',
            242 => 'tests/handlers/views_handler_field.test',
            243 => 'tests/handlers/views_handler_field_boolean.test',
            244 => 'tests/handlers/views_handler_field_custom.test',
            245 => 'tests/handlers/views_handler_field_counter.test',
            246 => 'tests/handlers/views_handler_field_date.test',
            247 => 'tests/handlers/views_handler_field_file_size.test',
            248 => 'tests/handlers/views_handler_field_math.test',
            249 => 'tests/handlers/views_handler_field_url.test',
            250 => 'tests/handlers/views_handler_field_xss.test',
            251 => 'tests/handlers/views_handler_filter_combine.test',
            252 => 'tests/handlers/views_handler_filter_date.test',
            253 => 'tests/handlers/views_handler_filter_equality.test',
            254 => 'tests/handlers/views_handler_filter_in_operator.test',
            255 => 'tests/handlers/views_handler_filter_numeric.test',
            256 => 'tests/handlers/views_handler_filter_string.test',
            257 => 'tests/handlers/views_handler_sort_random.test',
            258 => 'tests/handlers/views_handler_sort_date.test',
            259 => 'tests/handlers/views_handler_sort.test',
            260 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
            261 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
            262 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
            263 => 'tests/plugins/views_plugin_display.test',
            264 => 'tests/styles/views_plugin_style_jump_menu.test',
            265 => 'tests/styles/views_plugin_style.test',
            266 => 'tests/styles/views_plugin_style_base.test',
            267 => 'tests/styles/views_plugin_style_mapping.test',
            268 => 'tests/styles/views_plugin_style_unformatted.test',
            269 => 'tests/views_access.test',
            270 => 'tests/views_analyze.test',
            271 => 'tests/views_basic.test',
            272 => 'tests/views_argument_default.test',
            273 => 'tests/views_argument_validator.test',
            274 => 'tests/views_exposed_form.test',
            275 => 'tests/field/views_fieldapi.test',
            276 => 'tests/views_glossary.test',
            277 => 'tests/views_groupby.test',
            278 => 'tests/views_handlers.test',
            279 => 'tests/views_module.test',
            280 => 'tests/views_pager.test',
            281 => 'tests/views_plugin_localization_test.inc',
            282 => 'tests/views_translatable.test',
            283 => 'tests/views_query.test',
            284 => 'tests/views_upgrade.test',
            285 => 'tests/views_test.views_default.inc',
            286 => 'tests/comment/views_handler_argument_comment_user_uid.test',
            287 => 'tests/comment/views_handler_filter_comment_user_uid.test',
            288 => 'tests/node/views_node_revision_relations.test',
            289 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
            290 => 'tests/user/views_handler_field_user_name.test',
            291 => 'tests/user/views_user_argument_default.test',
            292 => 'tests/user/views_user_argument_validate.test',
            293 => 'tests/user/views_user.test',
            294 => 'tests/views_cache.test',
            295 => 'tests/views_view.test',
            296 => 'tests/views_ui.test',
          ),
          'version' => '7.x-3.7',
          'project' => 'views',
          'datestamp' => '1365499236',
        ),
        'schema_version' => '7301',
        'project' => 'views',
        'version' => '7.x-3.7',
      ),
      'pathauto' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathauto.test',
          ),
          'configure' => 'admin/config/search/path/patterns',
          'recommends' => 
          array (
            0 => 'redirect',
          ),
          'version' => '7.x-1.2',
          'project' => 'pathauto',
          'datestamp' => '1344525185',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'pathauto',
        'version' => '7.x-1.2',
      ),
      'simplehtmldom' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/simplehtmldom/simplehtmldom.module',
        'basename' => 'simplehtmldom.module',
        'name' => 'simplehtmldom',
        'info' => 
        array (
          'name' => 'simplehtmldom API',
          'description' => 'A wrapper module around the simplehtmldom PHP library at sourceforge.',
          'package' => 'Filter',
          'core' => '7.x',
          'version' => '7.x-1.12',
          'project' => 'simplehtmldom',
          'datestamp' => '1307968619',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'simplehtmldom',
        'version' => '7.x-1.12',
      ),
      'blockcache_alter' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/blockcache_alter/blockcache_alter.module',
        'basename' => 'blockcache_alter.module',
        'name' => 'blockcache_alter',
        'info' => 
        array (
          'name' => 'Block Cache Alter',
          'description' => 'Alter the cache settings per block.',
          'core' => '7.x',
          'package' => 'Caching',
          'files' => 
          array (
            0 => 'blockcache_alter.module',
            1 => 'blockcache_alter.install',
          ),
          'version' => '7.x-1.0',
          'project' => 'blockcache_alter',
          'datestamp' => '1294226749',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'blockcache_alter',
        'version' => '7.x-1.0',
      ),
      'strongarm' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/strongarm/strongarm.module',
        'basename' => 'strongarm.module',
        'name' => 'strongarm',
        'info' => 
        array (
          'name' => 'Strongarm',
          'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'strongarm.admin.inc',
            1 => 'strongarm.install',
            2 => 'strongarm.module',
          ),
          'version' => '7.x-2.0',
          'project' => 'strongarm',
          'datestamp' => '1339604214',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'strongarm',
        'version' => '7.x-2.0',
      ),
      'bb_gallery' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/bb_features/bb_gallery/bb_gallery.module',
        'basename' => 'bb_gallery.module',
        'name' => 'bb_gallery',
        'info' => 
        array (
          'name' => 'BB Gallery',
          'description' => 'Voorziet een eenvoudige fotogalerij',
          'core' => '7.x',
          'package' => 'BrightBrain',
          'version' => '7.x-1.0-beta1',
          'project' => 'bb_gallery',
          'dependencies' => 
          array (
            0 => 'bb_default_content',
            1 => 'image',
            2 => 'node',
            3 => 'semanticviews',
            4 => 'strongarm',
            5 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'field_gallery_photo',
            ),
            'field_instance' => 
            array (
              0 => 'node-fotogalerij-field_gallery_photo',
            ),
            'image' => 
            array (
              0 => 'fotogalerij_thumbnail',
            ),
            'menu_links' => 
            array (
              0 => 'main-menu:fotogalerij',
            ),
            'node' => 
            array (
              0 => 'fotogalerij',
            ),
            'variable' => 
            array (
              0 => 'comment_anonymous_fotogalerij',
              1 => 'comment_default_mode_fotogalerij',
              2 => 'comment_default_per_page_fotogalerij',
              3 => 'comment_form_location_fotogalerij',
              4 => 'comment_fotogalerij',
              5 => 'comment_preview_fotogalerij',
              6 => 'comment_subject_field_fotogalerij',
              7 => 'field_bundle_settings_node__fotogalerij',
              8 => 'language_content_type_fotogalerij',
              9 => 'menu_options_fotogalerij',
              10 => 'menu_parent_fotogalerij',
              11 => 'node_options_fotogalerij',
              12 => 'node_preview_fotogalerij',
              13 => 'node_submitted_fotogalerij',
              14 => 'pathauto_node_fotogalerij_pattern',
            ),
            'views_view' => 
            array (
              0 => 'fotogalerij',
            ),
          ),
          'features_exclude' => 
          array (
            'dependencies' => 
            array (
              'ctools' => 'ctools',
              'features' => 'features',
              'menu' => 'menu',
            ),
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'bb_gallery',
        'version' => '7.x-1.0-beta1',
      ),
      'bb_carrousel' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/bb_features/bb_carrousel/bb_carrousel.module',
        'basename' => 'bb_carrousel.module',
        'name' => 'bb_carrousel',
        'info' => 
        array (
          'name' => 'BB Carrousel',
          'description' => 'Een carrousel block (promo, in de kijker...)',
          'core' => '7.x',
          'package' => 'BrightBrain',
          'version' => '7.x-1.0-beta2',
          'project' => 'bb_carrousel',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'image',
            2 => 'node',
            3 => 'semanticviews',
            4 => 'text',
            5 => 'views',
            6 => 'bb_flexslider',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'field_carrousel_beschrijving',
              1 => 'field_carrousel_visual',
            ),
            'field_instance' => 
            array (
              0 => 'node-carrousel-field_carrousel_beschrijving',
              1 => 'node-carrousel-field_carrousel_visual',
            ),
            'image' => 
            array (
              0 => 'carrousel',
            ),
            'node' => 
            array (
              0 => 'carrousel',
            ),
            'views_view' => 
            array (
              0 => 'carrousel',
            ),
          ),
          'features_exclude' => 
          array (
            'dependencies' => 
            array (
              'ctools' => 'ctools',
            ),
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'bb_carrousel',
        'version' => '7.x-1.0-beta2',
      ),
      'bb_events' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/bb_features/bb_events/bb_events.module',
        'basename' => 'bb_events.module',
        'name' => 'bb_events',
        'info' => 
        array (
          'name' => 'BB Events',
          'description' => 'Evenementen, inclusief datum en locatie.',
          'core' => '7.x',
          'package' => 'BrightBrain',
          'version' => '7.x-1.0-beta1',
          'project' => 'bb_events',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'features',
            2 => 'location_cck',
            3 => 'menu',
            4 => 'node',
            5 => 'strongarm',
            6 => 'text',
            7 => 'views',
            8 => 'date_views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'body',
              1 => 'field_event_date',
              2 => 'field_event_location',
            ),
            'field_instance' => 
            array (
              0 => 'node-event-body',
              1 => 'node-event-field_event_date',
              2 => 'node-event-field_event_location',
            ),
            'menu_custom' => 
            array (
              0 => 'main-menu',
            ),
            'menu_links' => 
            array (
              0 => 'main-menu:events',
            ),
            'node' => 
            array (
              0 => 'event',
            ),
            'variable' => 
            array (
              0 => 'comment_anonymous_event',
              1 => 'comment_default_mode_event',
              2 => 'comment_default_per_page_event',
              3 => 'comment_event',
              4 => 'comment_form_location_event',
              5 => 'comment_preview_event',
              6 => 'comment_subject_field_event',
              7 => 'field_bundle_settings_node__event',
              8 => 'language_content_type_event',
              9 => 'location_geocode_be',
              10 => 'location_geocode_google_minimum_accuracy',
              11 => 'menu_options_event',
              12 => 'menu_parent_event',
              13 => 'node_options_event',
              14 => 'node_preview_event',
              15 => 'node_submitted_event',
            ),
            'views_view' => 
            array (
              0 => 'events',
            ),
          ),
          'features_exclude' => 
          array (
            'dependencies' => 
            array (
              'ctools' => 'ctools',
            ),
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'bb_events',
        'version' => '7.x-1.0-beta1',
      ),
      'bb_flexslider' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/bb_features/bb_flexslider/bb_flexslider.module',
        'basename' => 'bb_flexslider.module',
        'name' => 'bb_flexslider',
        'info' => 
        array (
          'name' => 'BB Flexslider',
          'description' => 'Adding flexslider plugin',
          'core' => '7.x',
          'version' => '7.x-1.0',
          'package' => 'BrightBrain',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.x-1.0',
      ),
      'bb_contentlijst' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/bb_features/bb_contentlijst/bb_contentlijst.module',
        'basename' => 'bb_contentlijst.module',
        'name' => 'bb_contentlijst',
        'info' => 
        array (
          'name' => 'BB ContentLijst',
          'description' => 'Een standaard contentlijst (nodequeue)',
          'core' => '7.x',
          'package' => 'BrightBrain',
          'version' => '7.x-1.0-beta1',
          'project' => 'bb_contentlijst',
          'dependencies' => 
          array (
            0 => 'fe_nodequeue',
          ),
          'features' => 
          array (
            'fe_nodequeue' => 
            array (
              0 => 'contentlijst',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'bb_contentlijst',
        'version' => '7.x-1.0-beta1',
      ),
      'bb_customer_reference' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/bb_features/bb_customer_reference/bb_customer_reference.module',
        'basename' => 'bb_customer_reference.module',
        'name' => 'bb_customer_reference',
        'info' => 
        array (
          'name' => 'BB Customer Reference',
          'description' => 'Voorziet de mogelijkheid tot klantenreferenties',
          'core' => '7.x',
          'package' => 'BrightBrain',
          'version' => '7.x-1.0-beta2',
          'project' => 'bb_customer_reference',
          'dependencies' => 
          array (
            0 => 'bb_flexslider',
            1 => 'features',
            2 => 'node',
            3 => 'semanticviews',
            4 => 'strongarm',
            5 => 'text',
            6 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'field_customer_message',
              1 => 'field_customer_name',
            ),
            'field_instance' => 
            array (
              0 => 'node-customer_ref-field_customer_message',
              1 => 'node-customer_ref-field_customer_name',
            ),
            'node' => 
            array (
              0 => 'customer_ref',
            ),
            'variable' => 
            array (
              0 => 'comment_anonymous_customer_ref',
              1 => 'comment_customer_ref',
              2 => 'comment_default_mode_customer_ref',
              3 => 'comment_default_per_page_customer_ref',
              4 => 'comment_form_location_customer_ref',
              5 => 'comment_preview_customer_ref',
              6 => 'comment_subject_field_customer_ref',
              7 => 'field_bundle_settings_node__customer_ref',
              8 => 'language_content_type_customer_ref',
              9 => 'menu_options_customer_ref',
              10 => 'menu_parent_customer_ref',
              11 => 'node_options_customer_ref',
              12 => 'node_preview_customer_ref',
              13 => 'node_submitted_customer_ref',
            ),
            'views_view' => 
            array (
              0 => 'klantenreferenties',
            ),
          ),
          'features_exclude' => 
          array (
            'dependencies' => 
            array (
              'ctools' => 'ctools',
            ),
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'bb_customer_reference',
        'version' => '7.x-1.0-beta2',
      ),
      'bb_default_content' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/bb_features/bb_default_content/bb_default_content.module',
        'basename' => 'bb_default_content.module',
        'name' => 'bb_default_content',
        'info' => 
        array (
          'name' => 'BB Default Content',
          'description' => 'Adds default content to website',
          'core' => '7.x',
          'package' => 'BrightBrain',
          'version' => '7.x-1.0-alfa5',
          'project' => 'bb_default_content',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'menu',
            2 => 'node',
            3 => 'text',
            4 => 'uuid_features',
          ),
          '__drupal_alter_by_ref' => 
          array (
            0 => 
            array (
              'node' => 
              array (
                'page' => 'page',
              ),
            ),
            1 => 
            array (
              'node' => 
              array (
                'webform' => 'webform',
              ),
            ),
          ),
          'datestamp' => '1378813265',
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'body',
            ),
            'field_instance' => 
            array (
              0 => 'node-page-body',
              1 => 'node-webform-body',
            ),
            'menu_custom' => 
            array (
              0 => 'main-menu',
              1 => 'menu-service-menu',
            ),
            'menu_links' => 
            array (
              0 => 'main-menu:<front>',
              1 => 'main-menu:node/2',
              2 => 'main-menu:node/3',
              3 => 'main-menu:node/5',
              4 => 'menu-service-menu:node/4',
              5 => 'menu-service-menu:node/6',
            ),
            'node' => 
            array (
              0 => 'page',
              1 => 'webform',
            ),
            'uuid_node' => 
            array (
              0 => '6949ca4d-8fa5-43a3-9485-d531e7180e68',
              1 => '6b9721f0-2e5b-4f8a-accf-fe4acd6eb3b3',
              2 => '9d484b03-dd82-4fbe-bdd6-d7d7c585b581',
              3 => 'd46bd6f9-5fb2-4554-aa51-1fe7082a945a',
              4 => 'e654687b-e2fb-4cbc-921d-be226e6a7af4',
            ),
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'bb_default_content',
        'version' => '7.x-1.0-alfa5',
      ),
      'bb_jobs' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/bb_features/bb_jobs/bb_jobs.module',
        'basename' => 'bb_jobs.module',
        'name' => 'bb_jobs',
        'info' => 
        array (
          'name' => 'BB Jobs',
          'description' => 'Jobs gerelateerde functionaliteiten',
          'core' => '7.x',
          'package' => 'BrightBrain',
          'version' => '7.x-1.0-beta2',
          'project' => 'bb_jobs',
          'dependencies' => 
          array (
            0 => 'bb_default_content',
            1 => 'node',
            2 => 'strongarm',
            3 => 'taxonomy',
            4 => 'text',
            5 => 'views',
          ),
          '__drupal_alter_by_ref' => 
          array (
            0 => 
            array (
              'node' => 
              array (
                'job' => 'job',
              ),
            ),
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'field_job_call_to_action',
              1 => 'field_job_company',
              2 => 'field_job_description',
              3 => 'field_job_location',
              4 => 'field_job_offer',
              5 => 'field_job_profile',
              6 => 'field_job_type',
            ),
            'field_instance' => 
            array (
              0 => 'node-job-field_job_call_to_action',
              1 => 'node-job-field_job_company',
              2 => 'node-job-field_job_description',
              3 => 'node-job-field_job_location',
              4 => 'node-job-field_job_offer',
              5 => 'node-job-field_job_profile',
              6 => 'node-job-field_job_type',
            ),
            'menu_links' => 
            array (
              0 => 'main-menu:jobs',
            ),
            'node' => 
            array (
              0 => 'job',
            ),
            'taxonomy' => 
            array (
              0 => 'job_type',
            ),
            'uuid_node' => 
            array (
              0 => '5ce36bba-3625-473d-85cc-dba533b1a1fc',
              1 => '7e8aca48-e49b-46a2-8c76-f00be55c98dc',
            ),
            'uuid_term' => 
            array (
              0 => '04b058e4-7069-4a14-95b0-351978083e24',
              1 => '0ff44d0c-772d-45da-8e98-e0301a662791',
              2 => 'b1d82b8d-5dd4-4c65-b111-0820b470dc53',
            ),
            'variable' => 
            array (
              0 => 'comment_anonymous_job',
              1 => 'comment_default_mode_job',
              2 => 'comment_default_per_page_job',
              3 => 'comment_form_location_job',
              4 => 'comment_job',
              5 => 'comment_preview_job',
              6 => 'comment_subject_field_job',
              7 => 'field_bundle_settings_node__job',
              8 => 'language_content_type_job',
              9 => 'menu_options_job',
              10 => 'menu_parent_job',
              11 => 'node_options_job',
              12 => 'node_preview_job',
              13 => 'node_submitted_job',
              14 => 'pathauto_node_job_pattern',
            ),
            'views_view' => 
            array (
              0 => 'jobs',
            ),
          ),
          'features_exclude' => 
          array (
            'dependencies' => 
            array (
              'ctools' => 'ctools',
              'features' => 'features',
              'menu' => 'menu',
              'options' => 'options',
              'uuid' => 'uuid',
              'uuid_features' => 'uuid_features',
            ),
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'bb_jobs',
        'version' => '7.x-1.0-beta2',
      ),
      'bb_newsletter' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/bb_features/bb_newsletter/bb_newsletter.module',
        'basename' => 'bb_newsletter.module',
        'name' => 'bb_newsletter',
        'info' => 
        array (
          'name' => 'BB Newsletter',
          'description' => 'Newsletter functionalities, i.e. Campaign Monitor integration',
          'core' => '7.x',
          'version' => '7.x-1.0-beta1',
          'package' => 'BrightBrain',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.x-1.0-beta1',
      ),
      'location_generate' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/location/contrib/location_generate/location_generate.module',
        'basename' => 'location_generate.module',
        'name' => 'location_generate',
        'info' => 
        array (
          'name' => 'Location Generate',
          'description' => 'Bulk assign random latitude and longitudes to nodes.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'devel_generate',
            1 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_generate.module',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_addanother' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/location/contrib/location_addanother/location_addanother.module',
        'basename' => 'location_addanother.module',
        'name' => 'location_addanother',
        'info' => 
        array (
          'name' => 'Location Add Another',
          'description' => 'Allows you to quickly add locations directly from a node without having to click \'edit\' first.',
          'dependencies' => 
          array (
            0 => 'location',
            1 => 'location_node',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_addanother.module',
            1 => 'location_addanother.install',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_taxonomy' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/location/contrib/location_taxonomy/location_taxonomy.module',
        'basename' => 'location_taxonomy.module',
        'name' => 'location_taxonomy',
        'info' => 
        array (
          'name' => 'Location Taxonomy',
          'description' => 'Associate locations with taxonomy terms.',
          'dependencies' => 
          array (
            0 => 'location',
            1 => 'taxonomy',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_taxonomy.module',
            1 => 'location_taxonomy.install',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_cck' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/location/contrib/location_cck/location_cck.module',
        'basename' => 'location_cck.module',
        'name' => 'location_cck',
        'info' => 
        array (
          'name' => 'Location CCK',
          'description' => 'Defines a Location field type.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'package' => 'CCK',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_cck.module',
            1 => 'location_cck.install',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => '6301',
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_entity' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/location/contrib/location_entity/location_entity.module',
        'basename' => 'location_entity.module',
        'name' => 'location_entity',
        'info' => 
        array (
          'name' => 'Location Entity',
          'description' => 'Provide information about Location field to Entity module.',
          'core' => '7.x',
          'package' => 'Location',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'files' => 
          array (
            0 => 'location_entity.module',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_email' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/location/contrib/location_email/location_email.module',
        'basename' => 'location_email.module',
        'name' => 'location_email',
        'info' => 
        array (
          'name' => 'Location Email',
          'package' => 'Location',
          'description' => 'Allows you to add an email address to a location.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_email.module',
            1 => 'location_email.install',
            2 => 'location_email.views.inc',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_search' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/location/contrib/location_search/location_search.module',
        'basename' => 'location_search.module',
        'name' => 'location_search',
        'info' => 
        array (
          'name' => 'Location Search',
          'package' => 'Location',
          'description' => 'Advanced search page for locations.',
          'dependencies' => 
          array (
            0 => 'search',
            1 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_search.module',
            1 => 'location_search.install',
            2 => 'location_search.admin.inc',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => '5300',
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_phone' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/location/contrib/location_phone/location_phone.module',
        'basename' => 'location_phone.module',
        'name' => 'location_phone',
        'info' => 
        array (
          'name' => 'Location Phone',
          'package' => 'Location',
          'description' => 'Allows you to add a phone number to a location.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_phone.module',
            1 => 'location_phone.install',
            2 => 'location_phone.views.inc',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => '6301',
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_fax' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/location/contrib/location_fax/location_fax.module',
        'basename' => 'location_fax.module',
        'name' => 'location_fax',
        'info' => 
        array (
          'name' => 'Location Fax',
          'package' => 'Location',
          'description' => 'Allows you to add a fax number to a location.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_fax.module',
            1 => 'location_fax.install',
            2 => 'location_fax.views.inc',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => '6301',
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_user' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/location/location_user.module',
        'basename' => 'location_user.module',
        'name' => 'location_user',
        'info' => 
        array (
          'name' => 'User Locations',
          'description' => 'Associate locations with users.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_user.module',
            1 => 'location_user.install',
          ),
          'configure' => 'admin/config/people/accounts',
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/location/location.module',
        'basename' => 'location.module',
        'name' => 'location',
        'info' => 
        array (
          'name' => 'Location',
          'package' => 'Location',
          'description' => 'The location module allows you to associate a geographic location with content and users. Users can do proximity searches by postal code.  This is useful for organizing communities that have a geographic presence.',
          'core' => '7.x',
          'configure' => 'admin/config/content/location',
          'files' => 
          array (
            0 => 'location.module',
            1 => 'location.install',
            2 => 'location.admin.inc',
            3 => 'location.georss.inc',
            4 => 'location.inc',
            5 => 'location.token.inc',
            6 => 'location.views.inc',
            7 => 'location.views_default.inc',
            8 => 'location.migrate.inc',
            9 => 'tests/location_testcase.test',
            10 => 'tests/cow.test',
            11 => 'tests/earth.test',
            12 => 'tests/google_geocoder.test',
            13 => 'tests/location_cck.test',
            14 => 'tests/location_cck2.test',
            15 => 'handlers/location_handler_argument_location_country.inc',
            16 => 'handlers/location_handler_argument_location_province.inc',
            17 => 'handlers/location_handler_argument_location_proximity.inc',
            18 => 'handlers/location_handler_field_location_address.inc',
            19 => 'handlers/location_handler_field_location_country.inc',
            20 => 'handlers/location_handler_field_location_distance.inc',
            21 => 'handlers/location_handler_field_location_province.inc',
            22 => 'handlers/location_handler_field_location_street.inc',
            23 => 'handlers/location_handler_filter_location_country.inc',
            24 => 'handlers/location_handler_filter_location_province.inc',
            25 => 'handlers/location_handler_sort_location_distance.inc',
            26 => 'handlers/location_views_handler_field_coordinates.inc',
            27 => 'handlers/location_views_handler_field_latitude.inc',
            28 => 'handlers/location_views_handler_field_longitude.inc',
            29 => 'handlers/location_views_handler_filter_proximity.inc',
            30 => 'plugins/contexts/location.inc',
            31 => 'plugins/relationships/location_from_node.inc',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7302',
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'location_node' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/location/location_node.module',
        'basename' => 'location_node.module',
        'name' => 'location_node',
        'info' => 
        array (
          'name' => 'Node Locations',
          'description' => 'Associate locations with nodes.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_node.module',
            1 => 'location_node.install',
          ),
          'version' => '7.x-3.2-beta2',
          'project' => 'location',
          'datestamp' => '1387463317',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.2-beta2',
      ),
      'libraries_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/libraries/tests/libraries_test.module',
        'basename' => 'libraries_test.module',
        'name' => 'libraries_test',
        'info' => 
        array (
          'name' => 'Libraries test module',
          'description' => 'Tests library detection and loading.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'hidden' => true,
          'version' => '7.x-2.1',
          'project' => 'libraries',
          'datestamp' => '1362848412',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'libraries',
        'version' => '7.x-2.1',
      ),
      'libraries' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/libraries/libraries.module',
        'basename' => 'libraries.module',
        'name' => 'libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'description' => 'Allows version-dependent and shared usage of external libraries.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/libraries.test',
          ),
          'version' => '7.x-2.1',
          'project' => 'libraries',
          'datestamp' => '1362848412',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'libraries',
        'version' => '7.x-2.1',
      ),
      'page_title' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/page_title/page_title.module',
        'basename' => 'page_title.module',
        'name' => 'page_title',
        'info' => 
        array (
          'name' => 'Page Title',
          'description' => 'Enhanced control over the page title (in the &lt;head> tag).',
          'core' => '7.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'page_title.module',
            1 => 'page_title.admin.inc',
            2 => 'page_title.tokens.inc',
            3 => 'page_title.test',
            4 => 'views/plugins/page_title_plugin_display_page_with_page_title.inc',
            5 => 'views_handler_field_node_page_title.inc',
          ),
          'configure' => 'admin/config/search/page-title',
          'version' => '7.x-2.7',
          'project' => 'page_title',
          'datestamp' => '1336556786',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'page_title',
        'version' => '7.x-2.7',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'views_content' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/ctools/views_content/views_content.module',
        'basename' => 'views_content.module',
        'name' => 'views_content',
        'info' => 
        array (
          'name' => 'Views content panes',
          'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
            1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
            2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '7.x',
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'page_manager' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'core' => '7.x',
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'stylizer' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'color',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'bulk_export' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_export_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/ctools/tests/ctools_export_test/ctools_export_test.module',
        'basename' => 'ctools_export_test.module',
        'name' => 'ctools_export_test',
        'info' => 
        array (
          'name' => 'CTools export test',
          'description' => 'CTools export test module',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'hidden' => true,
          'files' => 
          array (
            0 => 'ctools_export.test',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_plugin_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/ctools/tests/ctools_plugin_test.module',
        'basename' => 'ctools_plugin_test.module',
        'name' => 'ctools_plugin_test',
        'info' => 
        array (
          'name' => 'Chaos tools plugins test',
          'description' => 'Provides hooks for testing ctools plugins.',
          'package' => 'Chaos tool suite',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'ctools.plugins.test',
            1 => 'object_cache.test',
            2 => 'css.test',
            3 => 'context.test',
            4 => 'math_expression.test',
            5 => 'math_expression_stack.test',
          ),
          'hidden' => true,
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'files' => 
          array (
            0 => 'includes/context.inc',
            1 => 'includes/math-expr.inc',
            2 => 'includes/stylizer.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6008',
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'token_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/token/tests/token_test.module',
        'basename' => 'token_test.module',
        'name' => 'token_test',
        'info' => 
        array (
          'name' => 'Token Test',
          'description' => 'Testing module for token functionality.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token_test.module',
          ),
          'hidden' => true,
          'version' => '7.x-1.5',
          'project' => 'token',
          'datestamp' => '1361665026',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'token',
        'version' => '7.x-1.5',
      ),
      'token' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token.test',
          ),
          'version' => '7.x-1.5',
          'project' => 'token',
          'datestamp' => '1361665026',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'token',
        'version' => '7.x-1.5',
      ),
      'site_map' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/site_map/site_map.module',
        'basename' => 'site_map.module',
        'name' => 'site_map',
        'info' => 
        array (
          'name' => 'Site map',
          'description' => 'Display a site map.',
          'core' => '7.x',
          'configure' => 'admin/config/search/sitemap',
          'version' => '7.x-1.0',
          'project' => 'site_map',
          'datestamp' => '1315890108',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'site_map',
        'version' => '7.x-1.0',
      ),
      'admin_devel' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/admin_menu/admin_devel/admin_devel.module',
        'basename' => 'admin_devel.module',
        'name' => 'admin_devel',
        'info' => 
        array (
          'name' => 'Administration Development tools',
          'description' => 'Administration and debugging functionality for developers and site builders.',
          'package' => 'Administration',
          'core' => '7.x',
          'scripts' => 
          array (
            0 => 'admin_devel.js',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'admin_menu',
          'datestamp' => '1359651687',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc4',
      ),
      'admin_menu_toolbar' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
        'basename' => 'admin_menu_toolbar.module',
        'name' => 'admin_menu_toolbar',
        'info' => 
        array (
          'name' => 'Administration menu Toolbar style',
          'description' => 'A better Toolbar.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'admin_menu',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'admin_menu',
          'datestamp' => '1359651687',
          'php' => '5.2.4',
        ),
        'schema_version' => '6300',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc4',
      ),
      'admin_menu' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/admin_menu/admin_menu.module',
        'basename' => 'admin_menu.module',
        'name' => 'admin_menu',
        'info' => 
        array (
          'name' => 'Administration menu',
          'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
          'package' => 'Administration',
          'core' => '7.x',
          'configure' => 'admin/config/administration/admin_menu',
          'dependencies' => 
          array (
            0 => 'system (>7.10)',
          ),
          'files' => 
          array (
            0 => 'tests/admin_menu.test',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'admin_menu',
          'datestamp' => '1359651687',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc4',
      ),
      'acl_node_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/acl/tests/acl_node_test.module',
        'basename' => 'acl_node_test.module',
        'name' => 'acl_node_test',
        'info' => 
        array (
          'name' => 'ACL Node module tests',
          'description' => 'Support module for ACL node related testing.',
          'package' => 'Testing',
          'version' => '7.x-1.0',
          'core' => '7.x',
          'hidden' => true,
          'files' => 
          array (
            0 => 'acl_node_test.module',
          ),
          'project' => 'acl',
          'datestamp' => '1322308236',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'acl',
        'version' => '7.x-1.0',
      ),
      'acl' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/acl/acl.module',
        'basename' => 'acl.module',
        'name' => 'acl',
        'info' => 
        array (
          'name' => 'ACL',
          'description' => 'Access control list API. Has no features on its own.',
          'core' => '7.x',
          'package' => 'Access control',
          'version' => '7.x-1.0',
          'project' => 'acl',
          'datestamp' => '1322308236',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'acl',
        'version' => '7.x-1.0',
      ),
      'entity_feature' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/entity/tests/entity_feature.module',
        'basename' => 'entity_feature.module',
        'name' => 'entity_feature',
        'info' => 
        array (
          'name' => 'Entity feature module',
          'description' => 'Provides some entities in code.',
          'version' => '7.x-1.2',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_feature.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1376493705',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.2',
      ),
      'entity_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/entity/tests/entity_test.module',
        'basename' => 'entity_test.module',
        'name' => 'entity_test',
        'info' => 
        array (
          'name' => 'Entity CRUD test module',
          'description' => 'Provides entity types based upon the CRUD API.',
          'version' => '7.x-1.2',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_test.module',
            1 => 'entity_test.install',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1376493705',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.2',
      ),
      'entity_test_i18n' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/entity/tests/entity_test_i18n.module',
        'basename' => 'entity_test_i18n.module',
        'name' => 'entity_test_i18n',
        'info' => 
        array (
          'name' => 'Entity-test type translation',
          'description' => 'Allows translating entity-test types.',
          'dependencies' => 
          array (
            0 => 'entity_test',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.2',
          'project' => 'entity',
          'datestamp' => '1376493705',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.2',
      ),
      'entity_token' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/entity/entity_token.module',
        'basename' => 'entity_token.module',
        'name' => 'entity_token',
        'info' => 
        array (
          'name' => 'Entity tokens',
          'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_token.tokens.inc',
            1 => 'entity_token.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.2',
          'project' => 'entity',
          'datestamp' => '1376493705',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.2',
      ),
      'entity' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'entity',
        'info' => 
        array (
          'name' => 'Entity API',
          'description' => 'Enables modules to work with any entity type and to provide entities.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity.features.inc',
            1 => 'entity.i18n.inc',
            2 => 'entity.info.inc',
            3 => 'entity.rules.inc',
            4 => 'entity.test',
            5 => 'includes/entity.inc',
            6 => 'includes/entity.controller.inc',
            7 => 'includes/entity.ui.inc',
            8 => 'includes/entity.wrapper.inc',
            9 => 'views/entity.views.inc',
            10 => 'views/handlers/entity_views_field_handler_helper.inc',
            11 => 'views/handlers/entity_views_handler_area_entity.inc',
            12 => 'views/handlers/entity_views_handler_field_boolean.inc',
            13 => 'views/handlers/entity_views_handler_field_date.inc',
            14 => 'views/handlers/entity_views_handler_field_duration.inc',
            15 => 'views/handlers/entity_views_handler_field_entity.inc',
            16 => 'views/handlers/entity_views_handler_field_field.inc',
            17 => 'views/handlers/entity_views_handler_field_numeric.inc',
            18 => 'views/handlers/entity_views_handler_field_options.inc',
            19 => 'views/handlers/entity_views_handler_field_text.inc',
            20 => 'views/handlers/entity_views_handler_field_uri.inc',
            21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
            22 => 'views/handlers/entity_views_handler_relationship.inc',
            23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
          ),
          'version' => '7.x-1.2',
          'project' => 'entity',
          'datestamp' => '1376493705',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entity',
        'version' => '7.x-1.2',
      ),
      'imce' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/imce/imce.module',
        'basename' => 'imce.module',
        'name' => 'imce',
        'info' => 
        array (
          'name' => 'IMCE',
          'description' => 'An image/file uploader and browser supporting personal directories and user quota.',
          'core' => '7.x',
          'package' => 'Media',
          'configure' => 'admin/config/media/imce',
          'version' => '7.x-1.8',
          'project' => 'imce',
          'datestamp' => '1387302359',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'imce',
        'version' => '7.x-1.8',
      ),
      'uuid_default_entities_example' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/uuid/uuid_default_entities_example/uuid_default_entities_example.module',
        'basename' => 'uuid_default_entities_example.module',
        'name' => 'uuid_default_entities_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'features',
            2 => 'uuid',
          ),
          'description' => 'Example feature mainly used for testing.',
          'features' => 
          array (
            'uuid_entities' => 
            array (
              0 => 'deploy_example_plan',
            ),
          ),
          'name' => 'UUID default entities example',
          'package' => 'Features',
          'version' => '7.x-1.0-alpha5',
          'project' => 'uuid',
          'datestamp' => '1373620283',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha5',
      ),
      'uuid_services' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/uuid/uuid_services/uuid_services.module',
        'basename' => 'uuid_services.module',
        'name' => 'uuid_services',
        'info' => 
        array (
          'name' => 'UUID Services',
          'description' => 'Provides integration with the Services module, like exposing a UUID entity resource.',
          'core' => '7.x',
          'package' => 'Services - resources',
          'dependencies' => 
          array (
            0 => 'services',
            1 => 'uuid',
            2 => 'entity',
          ),
          'version' => '7.x-1.0-alpha5',
          'project' => 'uuid',
          'datestamp' => '1373620283',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha5',
      ),
      'uuid_path' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/uuid/uuid_path/uuid_path.module',
        'basename' => 'uuid_path.module',
        'name' => 'uuid_path',
        'info' => 
        array (
          'name' => 'UUID Path',
          'description' => 'Provides export functionality for url aliases.',
          'core' => '7.x',
          'package' => 'UUID',
          'dependencies' => 
          array (
            0 => 'uuid',
          ),
          'version' => '7.x-1.0-alpha5',
          'project' => 'uuid',
          'datestamp' => '1373620283',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha5',
      ),
      'uuid_services_example' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/uuid/uuid_services_example/uuid_services_example.module',
        'basename' => 'uuid_services_example.module',
        'name' => 'uuid_services_example',
        'info' => 
        array (
          'name' => 'UUID Services Example',
          'description' => 'Example feature of a UUID service. Works well with the Deploy Example feature as a client.',
          'core' => '7.x',
          'package' => 'Features',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'rest_server',
            1 => 'services',
            2 => 'uuid',
            3 => 'uuid_services',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'services:services:3',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'services_endpoint' => 
            array (
              0 => 'uuid_services_example',
            ),
          ),
          'version' => '7.x-1.0-alpha5',
          'project' => 'uuid',
          'datestamp' => '1373620283',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha5',
      ),
      'uuid' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/uuid/uuid.module',
        'basename' => 'uuid.module',
        'name' => 'uuid',
        'info' => 
        array (
          'name' => 'Universally Unique ID',
          'description' => 'Extends the entity functionality and adds support for universally unique identifiers.',
          'core' => '7.x',
          'package' => 'UUID',
          'configure' => 'admin/config/system/uuid',
          'files' => 
          array (
            0 => 'uuid.test',
          ),
          'version' => '7.x-1.0-alpha5',
          'project' => 'uuid',
          'datestamp' => '1373620283',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha5',
      ),
      'webform_ajax' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/webform_ajax/webform_ajax.module',
        'basename' => 'webform_ajax.module',
        'name' => 'webform_ajax',
        'info' => 
        array (
          'name' => 'Webform AJAX',
          'description' => 'Adds AJAX support to Webforms',
          'core' => '7.x',
          'package' => 'Webform',
          'dependencies' => 
          array (
            0 => 'webform',
            1 => 'ctools',
          ),
          'version' => '7.x-1.1',
          'project' => 'webform_ajax',
          'datestamp' => '1361543750',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'webform_ajax',
        'version' => '7.x-1.1',
      ),
      'context_ui' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/context/context_ui/context_ui.module',
        'basename' => 'context_ui.module',
        'name' => 'context_ui',
        'info' => 
        array (
          'name' => 'Context UI',
          'description' => 'Provides a simple UI for settings up a site structure using Context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'configure' => 'admin/structure/context',
          'files' => 
          array (
            0 => 'context.module',
            1 => 'tests/context_ui.test',
          ),
          'version' => '7.x-3.1',
          'project' => 'context',
          'datestamp' => '1381976667',
          'php' => '5.2.4',
        ),
        'schema_version' => '6004',
        'project' => 'context',
        'version' => '7.x-3.1',
      ),
      'context_layouts' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/context/context_layouts/context_layouts.module',
        'basename' => 'context_layouts.module',
        'name' => 'context_layouts',
        'info' => 
        array (
          'name' => 'Context layouts',
          'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/context_layouts_reaction_block.inc',
          ),
          'version' => '7.x-3.1',
          'project' => 'context',
          'datestamp' => '1381976667',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'context',
        'version' => '7.x-3.1',
      ),
      'context' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/context/context.module',
        'basename' => 'context.module',
        'name' => 'context',
        'info' => 
        array (
          'name' => 'Context',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'description' => 'Provide modules with a cache that lasts for a single page request.',
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/context.test',
            1 => 'tests/context.conditions.test',
            2 => 'tests/context.reactions.test',
          ),
          'version' => '7.x-3.1',
          'project' => 'context',
          'datestamp' => '1381976667',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'context',
        'version' => '7.x-3.1',
      ),
      'content_access_rules' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/content_access/content_access_rules/content_access_rules.module',
        'basename' => 'content_access_rules.module',
        'name' => 'content_access_rules',
        'info' => 
        array (
          'name' => 'Content Access Rules Integrations',
          'description' => 'Integrates Rules with Content access. Allows to act on access events, conditions, and actions.',
          'package' => 'Access control',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'content_access',
            1 => 'rules',
          ),
          'files' => 
          array (
            0 => 'content_access.rules.inc',
          ),
          'version' => '7.x-1.2-beta2',
          'project' => 'content_access',
          'datestamp' => '1366014321',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'content_access',
        'version' => '7.x-1.2-beta2',
      ),
      'content_access' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/content_access/content_access.module',
        'basename' => 'content_access.module',
        'name' => 'content_access',
        'info' => 
        array (
          'name' => 'Content Access',
          'description' => 'Provides flexible content access control.',
          'core' => '7.x',
          'package' => 'Access control',
          'files' => 
          array (
            0 => 'content_access.rules.inc',
            1 => 'tests/content_access.test',
            2 => 'tests/content_access_acl.test',
          ),
          'version' => '7.x-1.2-beta2',
          'project' => 'content_access',
          'datestamp' => '1366014321',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'content_access',
        'version' => '7.x-1.2-beta2',
      ),
      'variable_advanced' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/variable/variable_advanced/variable_advanced.module',
        'basename' => 'variable_advanced.module',
        'name' => 'variable_advanced',
        'info' => 
        array (
          'name' => 'Variable advanced',
          'description' => 'Provides access to advanced low level variables. By using this you will be able to break your site badly.',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.3',
          'project' => 'variable',
          'datestamp' => '1376034993',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable',
        'version' => '7.x-2.3',
      ),
      'variable_store' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/variable/variable_store/variable_store.module',
        'basename' => 'variable_store.module',
        'name' => 'variable_store',
        'info' => 
        array (
          'name' => 'Variable store',
          'description' => 'Database storage for variable realms. This is an API module.',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.3',
          'files' => 
          array (
            0 => 'variable_store.class.inc',
            1 => 'variable_store.test',
          ),
          'project' => 'variable',
          'datestamp' => '1376034993',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'variable',
        'version' => '7.x-2.3',
      ),
      'variable_realm' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/variable/variable_realm/variable_realm.module',
        'basename' => 'variable_realm.module',
        'name' => 'variable_realm',
        'info' => 
        array (
          'name' => 'Variable realm',
          'description' => 'API to use variable realms from different modules',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.3',
          'files' => 
          array (
            0 => 'variable_realm.class.inc',
            1 => 'variable_realm_union.class.inc',
          ),
          'project' => 'variable',
          'datestamp' => '1376034993',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'variable',
        'version' => '7.x-2.3',
      ),
      'variable_admin' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/variable/variable_admin/variable_admin.module',
        'basename' => 'variable_admin.module',
        'name' => 'variable_admin',
        'info' => 
        array (
          'name' => 'Variable admin',
          'description' => 'Variable Administration UI',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.3',
          'project' => 'variable',
          'datestamp' => '1376034993',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable',
        'version' => '7.x-2.3',
      ),
      'variable_example' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/variable/variable_example/variable_example.module',
        'basename' => 'variable_example.module',
        'name' => 'variable_example',
        'info' => 
        array (
          'name' => 'Variable example',
          'description' => 'An example module showing how to use the Variable API and providing some variables.',
          'dependencies' => 
          array (
            0 => 'variable',
            1 => 'variable_store',
          ),
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'variable_example.variable.inc',
          ),
          'version' => '7.x-2.3',
          'project' => 'variable',
          'datestamp' => '1376034993',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable',
        'version' => '7.x-2.3',
      ),
      'variable_views' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/variable/variable_views/variable_views.module',
        'basename' => 'variable_views.module',
        'name' => 'variable_views',
        'info' => 
        array (
          'name' => 'Variable views',
          'description' => 'Provides views integration for variable, included a default variable argument.',
          'dependencies' => 
          array (
            0 => 'variable',
            1 => 'views',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views_plugin_argument_default_variable.inc',
            1 => 'includes/views_handler_field_variable_title.inc',
            2 => 'includes/views_handler_field_variable_value.inc',
          ),
          'version' => '7.x-2.3',
          'project' => 'variable',
          'datestamp' => '1376034993',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable',
        'version' => '7.x-2.3',
      ),
      'variable' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/variable/variable.module',
        'basename' => 'variable.module',
        'name' => 'variable',
        'info' => 
        array (
          'name' => 'Variable',
          'description' => 'Variable Information and basic variable API',
          'package' => 'Variable',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/forum.variable.inc',
            1 => 'includes/locale.variable.inc',
            2 => 'includes/menu.variable.inc',
            3 => 'includes/node.variable.inc',
            4 => 'includes/system.variable.inc',
            5 => 'includes/taxonomy.variable.inc',
            6 => 'includes/translation.variable.inc',
            7 => 'includes/user.variable.inc',
            8 => 'variable.test',
          ),
          'version' => '7.x-2.3',
          'project' => 'variable',
          'datestamp' => '1376034993',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'variable',
        'version' => '7.x-2.3',
      ),
      'module_filter' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/module_filter/module_filter.module',
        'basename' => 'module_filter.module',
        'name' => 'module_filter',
        'info' => 
        array (
          'name' => 'Module filter',
          'description' => 'Filter the modules list.',
          'core' => '7.x',
          'package' => 'Administration',
          'files' => 
          array (
            0 => 'module_filter.install',
            1 => 'module_filter.js',
            2 => 'module_filter.module',
            3 => 'module_filter.admin.inc',
            4 => 'module_filter.theme.inc',
            5 => 'css/module_filter.css',
            6 => 'css/module_filter_tab.css',
            7 => 'js/module_filter.js',
            8 => 'js/module_filter_tab.js',
          ),
          'configure' => 'admin/config/user-interface/modulefilter',
          'version' => '7.x-2.0-alpha2',
          'project' => 'module_filter',
          'datestamp' => '1386356916',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'module_filter',
        'version' => '7.x-2.0-alpha2',
      ),
      'prev_next_views' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/prev_next/prev_next_views.module',
        'basename' => 'prev_next_views.module',
        'name' => 'prev_next_views',
        'info' => 
        array (
          'name' => 'Prev/Next for Views',
          'description' => 'Provide an API for previous/next nodes for Views results',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'prev_next',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'prev_next',
          'datestamp' => '1380623767',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'prev_next',
        'version' => '7.x-1.x-dev',
      ),
      'prev_next' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/prev_next/prev_next.module',
        'basename' => 'prev_next.module',
        'name' => 'prev_next',
        'info' => 
        array (
          'name' => 'Prev/Next',
          'description' => 'Provide a high performance API for previous/next nodes for a given node',
          'core' => '7.x',
          'configure' => 'admin/config/system/prev_next',
          'version' => '7.x-1.x-dev',
          'project' => 'prev_next',
          'datestamp' => '1380623767',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'prev_next',
        'version' => '7.x-1.x-dev',
      ),
      'nodequeue_service' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/nodequeue/addons/nodequeue_service/nodequeue_service.module',
        'basename' => 'nodequeue_service.module',
        'name' => 'nodequeue_service',
        'info' => 
        array (
          'name' => 'Nodequeue Service',
          'description' => 'Provides a nodequeue service.',
          'package' => 'Nodequeue',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'services',
            1 => 'nodequeue',
          ),
          'files' => 
          array (
            0 => 'nodequeue_service.inc',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'smartqueue' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/nodequeue/smartqueue.module',
        'basename' => 'smartqueue.module',
        'name' => 'smartqueue',
        'info' => 
        array (
          'name' => 'Smartqueue taxonomy',
          'description' => 'Creates a node queue for each taxonomy vocabulary',
          'package' => 'Nodequeue',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'nodequeue',
            1 => 'taxonomy',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'nodequeue_generate' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/nodequeue/nodequeue_generate.module',
        'basename' => 'nodequeue_generate.module',
        'name' => 'nodequeue_generate',
        'info' => 
        array (
          'name' => 'Nodequeue generate',
          'description' => 'Bulk assign nodes into queues for quickly populating a site.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'nodequeue',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'nodequeue_generate.module',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'nodequeue' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/nodequeue/nodequeue.module',
        'basename' => 'nodequeue.module',
        'name' => 'nodequeue',
        'info' => 
        array (
          'name' => 'Nodequeue',
          'description' => 'Create queues which can contain nodes in arbitrary order',
          'package' => 'Nodequeue',
          'core' => '7.x',
          'configure' => 'admin/structure/nodequeue/settings',
          'files' => 
          array (
            0 => 'includes/views/nodequeue.views.inc',
            1 => 'includes/nodequeue.actions.inc',
            2 => 'includes/views/nodequeue_handler_argument_subqueue_qid.inc',
            3 => 'includes/views/nodequeue_handler_field_all_queues.inc',
            4 => 'includes/views/nodequeue_handler_field_all_subqueues.inc',
            5 => 'includes/views/nodequeue_handler_field_links.inc',
            6 => 'includes/views/nodequeue_handler_field_queue_tab.inc',
            7 => 'includes/views/nodequeue_handler_filter_in_queue.inc',
            8 => 'includes/views/nodequeue_handler_relationship_nodequeue.inc',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'ckeditor' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/ckeditor/ckeditor.module',
        'basename' => 'ckeditor.module',
        'name' => 'ckeditor',
        'info' => 
        array (
          'name' => 'CKEditor',
          'description' => 'Enables CKEditor (WYSIWYG HTML editor) for use instead of plain text fields.',
          'core' => '7.x',
          'package' => 'User interface',
          'configure' => 'admin/config/content/ckeditor',
          'version' => '7.x-1.13',
          'project' => 'ckeditor',
          'datestamp' => '1365759619',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'ckeditor',
        'version' => '7.x-1.13',
      ),
      'views_content_cache' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/views_content_cache/views_content_cache.module',
        'basename' => 'views_content_cache.module',
        'name' => 'views_content_cache',
        'info' => 
        array (
          'name' => 'Views Content Cache',
          'description' => 'Provides a views cache plugin based on content type changes.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'plugins/views_content_cache/base.inc',
            1 => 'plugins/views_content_cache/comment.inc',
            2 => 'plugins/views_content_cache/node.inc',
            3 => 'plugins/views_content_cache/node_only.inc',
            4 => 'plugins/views_content_cache/og.inc',
            5 => 'plugins/views_content_cache/votingapi.inc',
            6 => 'views/views_content_cache_plugin_cache.inc',
            7 => 'tests/views_content_cache.test',
          ),
          'version' => '7.x-3.0-alpha3',
          'project' => 'views_content_cache',
          'datestamp' => '1383658110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_content_cache',
        'version' => '7.x-3.0-alpha3',
      ),
      'entityreference_behavior_example' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/entityreference/examples/entityreference_behavior_example/entityreference_behavior_example.module',
        'basename' => 'entityreference_behavior_example.module',
        'name' => 'entityreference_behavior_example',
        'info' => 
        array (
          'name' => 'Entity Reference Behavior Example',
          'description' => 'Provides some example code for implementing Entity Reference behaviors.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entityreference',
          ),
          'version' => '7.x-1.1',
          'project' => 'entityreference',
          'datestamp' => '1384973110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entityreference',
        'version' => '7.x-1.1',
      ),
      'entityreference_feeds_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/entityreference/tests/modules/entityreference_feeds_test/entityreference_feeds_test.module',
        'basename' => 'entityreference_feeds_test.module',
        'name' => 'entityreference_feeds_test',
        'info' => 
        array (
          'name' => 'Entityreference - Feeds integration tests',
          'description' => 'Support module for the Entityreference - Feeds integration tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'feeds',
            1 => 'feeds_ui',
            2 => 'entityreference',
          ),
          'version' => '7.x-1.1',
          'project' => 'entityreference',
          'datestamp' => '1384973110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entityreference',
        'version' => '7.x-1.1',
      ),
      'entityreference' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/entityreference/entityreference.module',
        'basename' => 'entityreference.module',
        'name' => 'entityreference',
        'info' => 
        array (
          'name' => 'Entity Reference',
          'description' => 'Provides a field that can reference other entities.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'entityreference.migrate.inc',
            1 => 'plugins/selection/abstract.inc',
            2 => 'plugins/selection/views.inc',
            3 => 'plugins/behavior/abstract.inc',
            4 => 'views/entityreference_plugin_display.inc',
            5 => 'views/entityreference_plugin_style.inc',
            6 => 'views/entityreference_plugin_row_fields.inc',
            7 => 'tests/entityreference.handlers.test',
            8 => 'tests/entityreference.taxonomy.test',
            9 => 'tests/entityreference.admin.test',
            10 => 'tests/entityreference.feeds.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'entityreference',
          'datestamp' => '1384973110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entityreference',
        'version' => '7.x-1.1',
      ),
      'i18n_string' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/i18n/i18n_string/i18n_string.module',
        'basename' => 'i18n_string.module',
        'name' => 'i18n_string',
        'info' => 
        array (
          'name' => 'String translation',
          'description' => 'Provides support for translation of user defined strings.',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_string.admin.inc',
            1 => 'i18n_string.inc',
            2 => 'i18n_string.test',
          ),
          'configure' => 'admin/config/regional/i18n/strings',
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_redirect' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/i18n/i18n_redirect/i18n_redirect.module',
        'basename' => 'i18n_redirect.module',
        'name' => 'i18n_redirect',
        'info' => 
        array (
          'name' => 'Translation redirect',
          'description' => 'Redirect to translated page when available. SEO for multilingual sites.',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_field' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/i18n/i18n_field/i18n_field.module',
        'basename' => 'i18n_field.module',
        'name' => 'i18n_field',
        'info' => 
        array (
          'name' => 'Field translation',
          'description' => 'Translate field properties',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_field.inc',
            1 => 'i18n_field.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_node' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/i18n/i18n_node/i18n_node.module',
        'basename' => 'i18n_node.module',
        'name' => 'i18n_node',
        'info' => 
        array (
          'name' => 'Multilingual content',
          'description' => 'Extended node options for multilingual content',
          'dependencies' => 
          array (
            0 => 'translation',
            1 => 'i18n',
            2 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/node',
          'files' => 
          array (
            0 => 'i18n_node.test',
            1 => 'i18n_node.variable.inc',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_user' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/i18n/i18n_user/i18n_user.module',
        'basename' => 'i18n_user.module',
        'name' => 'i18n_user',
        'info' => 
        array (
          'name' => 'User mail translation',
          'description' => 'Translate emails sent from the User module.',
          'core' => '7.x',
          'package' => 'Multilingual - Internationalization',
          'dependencies' => 
          array (
            0 => 'i18n_variable',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_contact' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/i18n/i18n_contact/i18n_contact.module',
        'basename' => 'i18n_contact.module',
        'name' => 'i18n_contact',
        'info' => 
        array (
          'name' => 'Contact translation',
          'description' => 'Makes contact categories and replies available for translation.',
          'dependencies' => 
          array (
            0 => 'contact',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_sync' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/i18n/i18n_sync/i18n_sync.module',
        'basename' => 'i18n_sync.module',
        'name' => 'i18n_sync',
        'info' => 
        array (
          'name' => 'Synchronize translations',
          'description' => 'Synchronizes taxonomy and fields accross translations of the same content.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_sync.module',
            1 => 'i18n_sync.install',
            2 => 'i18n_sync.module.inc',
            3 => 'i18n_sync.node.inc',
            4 => 'i18n_sync.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_menu' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/i18n/i18n_menu/i18n_menu.module',
        'basename' => 'i18n_menu.module',
        'name' => 'i18n_menu',
        'info' => 
        array (
          'name' => 'Menu translation',
          'description' => 'Supports translatable custom menu items.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'menu',
            2 => 'i18n_string',
            3 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_menu.inc',
            1 => 'i18n_menu.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_taxonomy' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/i18n/i18n_taxonomy/i18n_taxonomy.module',
        'basename' => 'i18n_taxonomy.module',
        'name' => 'i18n_taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy translation',
          'description' => 'Enables multilingual taxonomy.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'i18n_string',
            2 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_taxonomy.inc',
            1 => 'i18n_taxonomy.pages.inc',
            2 => 'i18n_taxonomy.admin.inc',
            3 => 'i18n_taxonomy.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_block' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/i18n/i18n_block/i18n_block.module',
        'basename' => 'i18n_block.module',
        'name' => 'i18n_block',
        'info' => 
        array (
          'name' => 'Block languages',
          'description' => 'Enables language selector for blocks and optional block translation.',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_block.inc',
            1 => 'i18n_block.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_variable' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/i18n/i18n_variable/i18n_variable.module',
        'basename' => 'i18n_variable.module',
        'name' => 'i18n_variable',
        'info' => 
        array (
          'name' => 'Variable translation',
          'description' => 'Multilingual variables that switch language depending on page language.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'variable_store (7.x-2.x)',
            2 => 'variable_realm (7.x-2.x)',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/variable',
          'files' => 
          array (
            0 => 'i18n_variable.class.inc',
            1 => 'i18n_variable.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_forum' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/i18n/i18n_forum/i18n_forum.module',
        'basename' => 'i18n_forum.module',
        'name' => 'i18n_forum',
        'info' => 
        array (
          'name' => 'Multilingual forum',
          'description' => 'Enables multilingual forum, translates names and containers.',
          'dependencies' => 
          array (
            0 => 'forum',
            1 => 'i18n_taxonomy',
            2 => 'i18n_node',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_forum.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_select' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/i18n/i18n_select/i18n_select.module',
        'basename' => 'i18n_select.module',
        'name' => 'i18n_select',
        'info' => 
        array (
          'name' => 'Multilingual select',
          'description' => 'API module for multilingual content selection',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/select',
          'files' => 
          array (
            0 => 'i18n_select.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_translation' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/i18n/i18n_translation/i18n_translation.module',
        'basename' => 'i18n_translation.module',
        'name' => 'i18n_translation',
        'info' => 
        array (
          'name' => 'Translation sets',
          'description' => 'Simple translation sets API for generic objects',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_translation.inc',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_path' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/i18n/i18n_path/i18n_path.module',
        'basename' => 'i18n_path.module',
        'name' => 'i18n_path',
        'info' => 
        array (
          'name' => 'Path translation',
          'description' => 'Define translations for generic paths',
          'dependencies' => 
          array (
            0 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_path.inc',
            1 => 'i18n_path.test',
          ),
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/i18n/tests/i18n_test.module',
        'basename' => 'i18n_test.module',
        'name' => 'i18n_test',
        'info' => 
        array (
          'name' => 'Internationalization tests',
          'description' => 'Helper module for testing i18n (do not enable manually)',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'translation',
            2 => 'i18n',
          ),
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'i18n' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/i18n/i18n.module',
        'basename' => 'i18n.module',
        'name' => 'i18n',
        'info' => 
        array (
          'name' => 'Internationalization',
          'description' => 'Extends Drupal support for multilingual features.',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'variable',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_object.inc',
            1 => 'i18n.test',
          ),
          'configure' => 'admin/config/regional/i18n',
          'version' => '7.x-1.10',
          'project' => 'i18n',
          'datestamp' => '1377069696',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'i18n',
        'version' => '7.x-1.10',
      ),
      'colorbox_node' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/colorbox_node/colorbox_node.module',
        'basename' => 'colorbox_node.module',
        'name' => 'colorbox_node',
        'info' => 
        array (
          'name' => 'Colorbox Node',
          'description' => 'Displays a node inside a colorbox without the header and the footer.',
          'core' => '7.x',
          'package' => 'colorbox',
          'dependencies' => 
          array (
            0 => 'colorbox',
          ),
          'files' => 
          array (
            0 => 'views/colorbox_node_handler_field_colorbox_node.inc',
            1 => 'views/colorbox_node_handler_field_colorbox_node_link.inc',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'colorbox_node.css',
            ),
          ),
          'version' => '7.x-3.2',
          'project' => 'colorbox_node',
          'datestamp' => '1379950916',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'colorbox_node',
        'version' => '7.x-3.2',
      ),
      'features_extra_test' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/features_extra/tests/features_extra_test.module',
        'basename' => 'features_extra_test.module',
        'name' => 'features_extra_test',
        'info' => 
        array (
          'name' => 'Features Extra test feature',
          'description' => 'Test feature for Features Extra.',
          'core' => '7.x',
          'package' => 'Testing',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'block_class',
            1 => 'fe_block',
            2 => 'fe_nodequeue',
          ),
          'features' => 
          array (
            'fe_block_boxes' => 
            array (
              0 => 'features_extra_test_block',
            ),
            'fe_block_settings' => 
            array (
              0 => 'block-features_extra_test_block',
            ),
            'fe_nodequeue' => 
            array (
              0 => 'features_extra_test_nodequeue',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'features_extra',
          'datestamp' => '1366049112',
        ),
        'schema_version' => 0,
        'project' => 'features_extra',
        'version' => '7.x-1.0-beta1',
      ),
      'fe_block' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/features_extra/fe_block.module',
        'basename' => 'fe_block.module',
        'name' => 'fe_block',
        'info' => 
        array (
          'name' => 'FE Block',
          'description' => 'Build blocks and block settings as features.',
          'core' => '7.x',
          'package' => 'Features extra',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'ctools',
            2 => 'features',
          ),
          'test_dependencies' => 
          array (
            0 => 'block_class',
          ),
          'files' => 
          array (
            0 => 'tests/features_extra_test_case.test',
            1 => 'tests/fe_block.test',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'features_extra',
          'datestamp' => '1366049112',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'features_extra',
        'version' => '7.x-1.0-beta1',
      ),
      'fe_profile' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/features_extra/fe_profile.module',
        'basename' => 'fe_profile.module',
        'name' => 'fe_profile',
        'info' => 
        array (
          'name' => 'FE Profile',
          'description' => 'Export profile field using features.',
          'core' => '7.x',
          'package' => 'Features extra',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'features',
            2 => 'profile',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'features_extra',
          'datestamp' => '1366049112',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'features_extra',
        'version' => '7.x-1.0-beta1',
      ),
      'fe_nodequeue' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/features_extra/fe_nodequeue.module',
        'basename' => 'fe_nodequeue.module',
        'name' => 'fe_nodequeue',
        'info' => 
        array (
          'name' => 'FE Nodequeue',
          'description' => 'Build nodequeues as features.',
          'core' => '7.x',
          'package' => 'Features extra',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'features',
            2 => 'nodequeue',
          ),
          'files' => 
          array (
            0 => 'tests/features_extra_test_case.test',
            1 => 'tests/fe_nodequeue.test',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'features_extra',
          'datestamp' => '1366049112',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'features_extra',
        'version' => '7.x-1.0-beta1',
      ),
      'menu_attributes' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/menu_attributes/menu_attributes.module',
        'basename' => 'menu_attributes.module',
        'name' => 'menu_attributes',
        'info' => 
        array (
          'name' => 'Menu attributes',
          'description' => 'Allows administrators to specify custom attributes for menu items.',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/structure/menu/settings',
          'files' => 
          array (
            0 => 'menu_attributes.test',
          ),
          'version' => '7.x-1.0-rc2',
          'project' => 'menu_attributes',
          'datestamp' => '1338541556',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'menu_attributes',
        'version' => '7.x-1.0-rc2',
      ),
      'uuid_features' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/uuid_features/uuid_features.module',
        'basename' => 'uuid_features.module',
        'name' => 'uuid_features',
        'info' => 
        array (
          'name' => 'UUID Features',
          'description' => 'Provides features integration for content (nodes, taxonomy, etc) based on the UUID module.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'uuid',
            2 => 'entity',
          ),
          'package' => 'Features',
          'files' => 
          array (
            0 => 'uuid_features.install',
            1 => 'uuid_features.module',
            2 => 'includes/uuid_features.drush.inc',
            3 => 'includes/uuid_file.features.inc',
            4 => 'includes/uuid_node.features.inc',
            5 => 'includes/uuid_term.features.inc',
            6 => 'modules/content.inc',
            7 => 'modules/filefield.inc',
            8 => 'modules/nodereference.inc',
            9 => 'modules/taxonomy.inc',
            10 => 'modules/userreference.inc',
          ),
          'version' => '7.x-1.0-alpha3',
          'project' => 'uuid_features',
          'datestamp' => '1359521134',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'uuid_features',
        'version' => '7.x-1.0-alpha3',
      ),
      'fences' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/fences/fences.module',
        'basename' => 'fences.module',
        'name' => 'fences',
        'info' => 
        array (
          'name' => 'Fences',
          'description' => 'Configurable field wrappers',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'configure' => 'admin/config/content/fences',
          'version' => '7.x-1.0',
          'project' => 'fences',
          'datestamp' => '1335373578',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'fences',
        'version' => '7.x-1.0',
      ),
      'ckeditor_link' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/ckeditor_link/ckeditor_link.module',
        'basename' => 'ckeditor_link.module',
        'name' => 'ckeditor_link',
        'info' => 
        array (
          'name' => 'CKEditor Link',
          'description' => 'Easily create links to Drupal internal paths through CKEditor.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/content/ckeditor_link',
          'version' => '7.x-2.3',
          'project' => 'ckeditor_link',
          'datestamp' => '1358413212',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ckeditor_link',
        'version' => '7.x-2.3',
      ),
      'views_bulk_operations' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/views_bulk_operations/views_bulk_operations.module',
        'basename' => 'views_bulk_operations.module',
        'name' => 'views_bulk_operations',
        'info' => 
        array (
          'name' => 'Views Bulk Operations',
          'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'views',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2.9',
          'files' => 
          array (
            0 => 'plugins/operation_types/base.class.php',
            1 => 'views/views_bulk_operations_handler_field_operations.inc',
          ),
          'version' => '7.x-3.2',
          'project' => 'views_bulk_operations',
          'datestamp' => '1387798183',
        ),
        'schema_version' => 0,
        'project' => 'views_bulk_operations',
        'version' => '7.x-3.2',
      ),
      'actions_permissions' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/views_bulk_operations/actions_permissions.module',
        'basename' => 'actions_permissions.module',
        'name' => 'actions_permissions',
        'info' => 
        array (
          'name' => 'Actions permissions (VBO)',
          'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
          'package' => 'Administration',
          'core' => '7.x',
          'version' => '7.x-3.2',
          'project' => 'views_bulk_operations',
          'datestamp' => '1387798183',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_bulk_operations',
        'version' => '7.x-3.2',
      ),
      'field_collection' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/field_collection/field_collection.module',
        'basename' => 'field_collection.module',
        'name' => 'field_collection',
        'info' => 
        array (
          'name' => 'Field collection',
          'description' => 'Provides a field collection field, to which any number of fields can be attached.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'files' => 
          array (
            0 => 'field_collection.test',
            1 => 'field_collection.info.inc',
            2 => 'views/field_collection_handler_relationship.inc',
          ),
          'configure' => 'admin/structure/field-collections',
          'package' => 'Fields',
          'version' => '7.x-1.0-beta5',
          'project' => 'field_collection',
          'datestamp' => '1356475963',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'field_collection',
        'version' => '7.x-1.0-beta5',
      ),
      'semanticviews' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/semanticviews/semanticviews.module',
        'basename' => 'semanticviews.module',
        'name' => 'semanticviews',
        'info' => 
        array (
          'name' => 'Semantic Views',
          'description' => 'Views 3 plugins for UI management of output markup',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'files' => 
          array (
            0 => 'semanticviews.module',
            1 => 'semanticviews_plugin_row_fields.inc',
            2 => 'semanticviews_plugin_style_default.inc',
            3 => 'semanticviews.theme.inc',
            4 => 'semanticviews.views_default.inc',
            5 => 'semanticviews.views.inc',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'semanticviews',
          'datestamp' => '1380627133',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'semanticviews',
        'version' => '7.x-1.x-dev',
      ),
      'email' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/modules/email/email.module',
        'basename' => 'email.module',
        'name' => 'email',
        'info' => 
        array (
          'name' => 'Email',
          'description' => 'Defines an email field type.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'email.migrate.inc',
          ),
          'version' => '7.x-1.2',
          'project' => 'email',
          'datestamp' => '1346254131',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'email',
        'version' => '7.x-1.2',
      ),
    ),
    'themes' => 
    array (
      'brightbrain' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/themes/brightbrain/brightbrain.info',
        'basename' => 'brightbrain.info',
        'name' => 'BrightBrain',
        'info' => 
        array (
          'screenshot' => 'screenshot.png',
          'name' => 'BrightBrain',
          'description' => 'Read the <a href="https://drupal.org/node/873778">online docs</a> or the included README.txt on how to create a theme with Zen.',
          'core' => '7.x',
          'base theme' => 'zen',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'system.menus.css',
              1 => 'system.messages.css',
              2 => 'system.theme.css',
              3 => 'css/styles.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'navigation' => 'Navigation bar',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'sidebar_first' => 'First sidebar',
            'sidebar_second' => 'Second sidebar',
            'footer' => 'Footer',
            'bottom' => 'Page bottom',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'favicon',
            6 => 'main_menu',
            7 => 'secondary_menu',
          ),
          'settings' => 
          array (
            'zen_breadcrumb' => 'yes',
            'zen_breadcrumb_separator' => ' › ',
            'zen_breadcrumb_home' => '1',
            'zen_breadcrumb_trailing' => '0',
            'zen_breadcrumb_title' => '0',
            'zen_skip_link_anchor' => 'main-menu',
            'zen_skip_link_text' => 'Jump to navigation',
            'zen_html5_respond_meta' => 
            array (
              0 => 'respond',
              1 => 'html5',
              2 => 'meta',
            ),
            'zen_rebuild_registry' => '1',
            'zen_wireframes' => '0',
          ),
          'version' => NULL,
        ),
        'project' => '',
        'version' => NULL,
      ),
      'zen' => 
      array (
        'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/sites/all/themes/zen/zen.info',
        'basename' => 'zen.info',
        'name' => 'Zen',
        'info' => 
        array (
          'name' => 'Zen',
          'description' => 'Zen sub-themes are the ultimate starting themes for Drupal 7. Read the <a href="https://drupal.org/node/873778">online docs</a> or the included README-FIRST.txt on how to create a theme with Zen.',
          'screenshot' => 'zen-internals/screenshot.png',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'system.menus.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'navigation' => 'Navigation bar',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'sidebar_first' => 'First sidebar',
            'sidebar_second' => 'Second sidebar',
            'footer' => 'Footer',
            'bottom' => 'Page bottom',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'settings' => 
          array (
            'zen_breadcrumb' => 'yes',
            'zen_breadcrumb_separator' => ' › ',
            'zen_breadcrumb_home' => '1',
            'zen_breadcrumb_trailing' => '0',
            'zen_breadcrumb_title' => '0',
            'zen_layout' => 'zen-responsive-sidebars',
            'zen_skip_link_anchor' => 'main-menu',
            'zen_skip_link_text' => 'Jump to navigation',
            'zen_html5_respond_meta' => 
            array (
              0 => 'respond',
              1 => 'html5',
              2 => 'meta',
            ),
            'zen_rebuild_registry' => '0',
            'zen_wireframes' => '0',
          ),
          'plugins' => 
          array (
            'panels' => 
            array (
              'layouts' => 'panels-layouts',
            ),
          ),
          'version' => '7.x-5.4',
          'project' => 'zen',
          'datestamp' => '1377107504',
        ),
        'project' => 'zen',
        'version' => '7.x-5.4',
      ),
    ),
  ),
  'profiles' => 
  array (
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'bb' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'testing' => 
    array (
      'modules' => 
      array (
        'drupal_system_listing_compatible_test' => 
        array (
          'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/profiles/testing/modules/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
          'basename' => 'drupal_system_listing_compatible_test.module',
          'name' => 'drupal_system_listing_compatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing compatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.24',
            'core' => '7.x',
            'hidden' => true,
            'files' => 
            array (
              0 => 'drupal_system_listing_compatible_test.test',
            ),
            'project' => 'drupal',
            'datestamp' => '1384983240',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'drupal',
          'version' => '7.24',
        ),
        'drupal_system_listing_incompatible_test' => 
        array (
          'filename' => '/home/www/aegir/platforms/radix-mark-build20131224/profiles/testing/modules/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
          'basename' => 'drupal_system_listing_incompatible_test.module',
          'name' => 'drupal_system_listing_incompatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing incompatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.24',
            'core' => '6.x',
            'hidden' => true,
            'project' => 'drupal',
            'datestamp' => '1384983240',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'drupal',
          'version' => '7.24',
        ),
      ),
      'themes' => 
      array (
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);