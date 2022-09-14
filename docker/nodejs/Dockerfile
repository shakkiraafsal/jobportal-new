FROM node
USER node
ENV NPM_CONFIG_PREFIX=/home/node/.npm-global
ENV PATH=$PATH:/home/node/.npm-global/bin
ENV NODE_ENV=${NODE_ENV}
RUN mkdir /home/node/code
WORKDIR /home/node/code
COPY --chown=node:node package.json .
RUN npm install