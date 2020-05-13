# wordpressTester
wordpress 살려줘... 날좀 살랴줘... ㅠㅜㅠㅜㅠㅜ 으흑으흑 ㅠㅜ
열심히 하면 몬가는 되겠지머...ㅎㅎㅎㅎㅎㅎ

# 나를 위해 메모해둠
*git bash*


1.git clone https://github.com/choi2812/wordpressTester.git

2.cd wordpressTester (clone 한 안으로 이동함요.)

3.git fetch

4.git status

 __확인__
 *****
 On branch master<br>
 Your branch is up to date with 'origin/master'.<br>
 nothing to commit, working tree clean<br>
 *****
맨날 하는데 왜 맨날 까묵까묵 할까.... 눈무리 난다....

5.git branch

현 브런치 위치 확인
<pre>* master</pre>

6.git checkout -b 20200514_startSet<br>
(20200514_startSet는 브런치 이름임요...)<br>
브런치 발생과 동시에 현재 브런치 변경할꺼임 귀찮음... ㅠ <br>
<pre>-b 까먹었음 깃 체크아웃 하셈...</pre>
 __확인__
*****
Switched to a new branch '20200514_startSet'
*****
5번으로 브런치 위치 확인 

7.git status<br>
파일을 일단 깃트 폴더안에 넣고 다시 깃 상태를 확인하면 기존에 마스터 브런치에 없던 파일 폴더가 나올꺼임.
주의할건 gui로 깃트조작을 했을 경우 폴더 대소문자가 변경 된 경우 인식을 못한다는거임...
ㅎㅎ. 수정은 삭제하고 코밋하고 다시 넣거나 ... 아님 바쉬로 다시
 __확인__
*****
On branch 20200514_startSet
Untracked files:
  (use "git add <file>..." to include in what will be committed)
        .htaccess
        index.php
        license.txt
        readme.html
        wp-activate.php
        wp-admin/
        wp-blog-header.php
        wp-comments-post.php
        wp-config-sample.php
        wp-config.php
        wp-content/
        wp-cron.php
        wp-includes/
        wp-links-opml.php
        wp-load.php
        wp-login.php
        wp-mail.php
        wp-settings.php
        wp-signup.php
        wp-trackback.php
        xmlrpc.php

nothing added to commit but untracked files present (use "git add" to track)
*****

8.git status<br>
9. git add .
warning: LF will be replaced by CRLF in .htaccess.
The file will have its original line endings in your working directory
.
.
10. git commit
[20200514_startSet 14832df] 20200514_firstSet
 1933 files changed, 1067040 insertions(+)
 create mode 100644 .htaccess
 create mode 100644 index.php
 create mode 100644 license.txt
 
 
11.git push origin 20200514_startSet
Enumerating objects: 2143, done.
Counting objects: 100% (2143/2143), done.
Delta compression using up to 8 threads
Compressing objects: 100% (2100/2100), done.
Writing objects: 100% (2143/2143), 12.51 MiB | 1.68 MiB/s, done.
Total 2143 (delta 206), reused 0 (delta 0)
remote: Resolving deltas: 100% (206/206), done.
remote:
remote: Create a pull request for '20200514_startSet' on GitHub by visiting:
remote:      https://github.com/choi2812/wordpressTester/pull/new/20200514_startSet
remote:
To https://github.com/choi2812/wordpressTester.git
 * [new branch]      20200514_startSet -> 20200514_startSet
 
12.개별 브런치에서 마스터 마지는  깃 허브  풀리퀘스트에서 병합합니다.


