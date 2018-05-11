<html>
	<body>
		<?php
			//Webhook
			//$webhook_commit = file_get_contents('php:\/\/input');

			$webhook_commit = '{
  "ref": "refs/heads/master",
  "before": "99d8f5c3fa774048eabe94b91a3568f6a00c2443",
  "after": "ff514a696dceb73701e8e261c266398a279e7757",
  "created": false,
  "deleted": false,
  "forced": false,
  "base_ref": null,
  "compare": "https://github.com/dcarlyn/PhiPsiKsu/compare/99d8f5c3fa77...ff514a696dce",
  "commits": [
    {
      "id": "ff514a696dceb73701e8e261c266398a279e7757",
      "tree_id": "1808ca383c2437694ceb9e5e208a5b0f547c29b8",
      "distinct": true,
      "message": "Update index.php\n\nFixed Spacing (Testing Webhook)",
      "timestamp": "2018-04-16T13:36:43-04:00",
      "url": "https://github.com/dcarlyn/PhiPsiKsu/commit/ff514a696dceb73701e8e261c266398a279e7757",
      "author": {
        "name": "dcarlyn",
        "email": "dcarlyn@kent.edu",
        "username": "dcarlyn"
      },
      "committer": {
        "name": "GitHub",
        "email": "noreply@github.com",
        "username": "web-flow"
      },
      "added": [

      ],
      "removed": [

      ],
      "modified": [
        "index.php"
      ]
    }
  ],
  "head_commit": {
    "id": "ff514a696dceb73701e8e261c266398a279e7757",
    "tree_id": "1808ca383c2437694ceb9e5e208a5b0f547c29b8",
    "distinct": true,
    "message": "Update index.php\n\nFixed Spacing (Testing Webhook)",
    "timestamp": "2018-04-16T13:36:43-04:00",
    "url": "https://github.com/dcarlyn/PhiPsiKsu/commit/ff514a696dceb73701e8e261c266398a279e7757",
    "author": {
      "name": "dcarlyn",
      "email": "dcarlyn@kent.edu",
      "username": "dcarlyn"
    },
    "committer": {
      "name": "GitHub",
      "email": "noreply@github.com",
      "username": "web-flow"
    },
    "added": [

    ],
    "removed": [

    ],
    "modified": [
      "index.php"
    ]
  },
  "repository": {
    "id": 109514330,
    "name": "PhiPsiKsu",
    "full_name": "dcarlyn/PhiPsiKsu",
    "owner": {
      "name": "dcarlyn",
      "email": "dcarlyn@kent.edu",
      "login": "dcarlyn",
      "id": 22378377,
      "avatar_url": "https://avatars0.githubusercontent.com/u/22378377?v=4",
      "gravatar_id": "",
      "url": "https://api.github.com/users/dcarlyn",
      "html_url": "https://github.com/dcarlyn",
      "followers_url": "https://api.github.com/users/dcarlyn/followers",
      "following_url": "https://api.github.com/users/dcarlyn/following{/other_user}",
      "gists_url": "https://api.github.com/users/dcarlyn/gists{/gist_id}",
      "starred_url": "https://api.github.com/users/dcarlyn/starred{/owner}{/repo}",
      "subscriptions_url": "https://api.github.com/users/dcarlyn/subscriptions",
      "organizations_url": "https://api.github.com/users/dcarlyn/orgs",
      "repos_url": "https://api.github.com/users/dcarlyn/repos",
      "events_url": "https://api.github.com/users/dcarlyn/events{/privacy}",
      "received_events_url": "https://api.github.com/users/dcarlyn/received_events",
      "type": "User",
      "site_admin": false
    },
    "private": false,
    "html_url": "https://github.com/dcarlyn/PhiPsiKsu",
    "description": "Website of Phi Kappa Psi at Kent State University",
    "fork": false,
    "url": "https://github.com/dcarlyn/PhiPsiKsu",
    "forks_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/forks",
    "keys_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/teams",
    "hooks_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/hooks",
    "issue_events_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/issues/events{/number}",
    "events_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/events",
    "assignees_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/assignees{/user}",
    "branches_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/branches{/branch}",
    "tags_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/tags",
    "blobs_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/languages",
    "stargazers_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/stargazers",
    "contributors_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/contributors",
    "subscribers_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/subscribers",
    "subscription_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/subscription",
    "commits_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/contents/{+path}",
    "compare_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/merges",
    "archive_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/downloads",
    "issues_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/issues{/number}",
    "pulls_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/labels{/name}",
    "releases_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/releases{/id}",
    "deployments_url": "https://api.github.com/repos/dcarlyn/PhiPsiKsu/deployments",
    "created_at": 1509815648,
    "updated_at": "2018-04-16T13:30:34Z",
    "pushed_at": 1523900203,
    "git_url": "git://github.com/dcarlyn/PhiPsiKsu.git",
    "ssh_url": "git@github.com:dcarlyn/PhiPsiKsu.git",
    "clone_url": "https://github.com/dcarlyn/PhiPsiKsu.git",
    "svn_url": "https://github.com/dcarlyn/PhiPsiKsu",
    "homepage": null,
    "size": 3262,
    "stargazers_count": 0,
    "watchers_count": 0,
    "language": "PHP",
    "has_issues": true,
    "has_projects": true,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": false,
    "forks_count": 0,
    "mirror_url": null,
    "archived": false,
    "open_issues_count": 0,
    "license": null,
    "forks": 0,
    "open_issues": 0,
    "watchers": 0,
    "default_branch": "master",
    "stargazers": 0,
    "master_branch": "master"
  },
  "pusher": {
    "name": "dcarlyn",
    "email": "dcarlyn@kent.edu"
  },
  "sender": {
    "login": "dcarlyn",
    "id": 22378377,
    "avatar_url": "https://avatars0.githubusercontent.com/u/22378377?v=4",
    "gravatar_id": "",
    "url": "https://api.github.com/users/dcarlyn",
    "html_url": "https://github.com/dcarlyn",
    "followers_url": "https://api.github.com/users/dcarlyn/followers",
    "following_url": "https://api.github.com/users/dcarlyn/following{/other_user}",
    "gists_url": "https://api.github.com/users/dcarlyn/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/dcarlyn/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/dcarlyn/subscriptions",
    "organizations_url": "https://api.github.com/users/dcarlyn/orgs",
    "repos_url": "https://api.github.com/users/dcarlyn/repos",
    "events_url": "https://api.github.com/users/dcarlyn/events{/privacy}",
    "received_events_url": "https://api.github.com/users/dcarlyn/received_events",
    "type": "User",
    "site_admin": false
  }
}';
			$webhook_file = fopen("webhook_file.txt", "w");
			fwrite($webhook_file, $webhook_commit);
			fclose($webhook_file);

			shell_exec("sudo php main.php");

		?>

	</body>
</html>
