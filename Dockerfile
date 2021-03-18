FROM debian:10.8
LABEL "repository"="https://github.com/hettipower/custom-bootstrap-theme-wp"
LABEL "maintainer"="Tharindu Hettiarachchi"

RUN apt update \
	&& apt -y upgrade \
  && apt install -y hub \
  && apt autoremove \
	&& apt autoclean \
	&& apt clean

ADD entrypoint.sh /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]