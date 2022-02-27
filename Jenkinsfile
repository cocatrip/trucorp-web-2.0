pipeline {
    agent any
    stages {
        stage("build") {
            steps {
                sh "docker build -t trucorp-web-2 ."
            }
        }
        stage("deploy") {
            steps {
                sh '''
                    if [ $(docker ps -af name=web | grep -v NAMES | wc -l) -eq 1 ]; then
                        docker container rm web -f
                    fi
                '''
                sh "docker run -d --name web -p 6000:80 trucorp-web-2.0:latest"
            }
        }
    }
}
