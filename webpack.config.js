const path = require('path');

module.exports = {
  entry: './app/resources/scripts/index',
  devtool: 'source-map',
  module: {
    rules: [
      {
        test: /\.tsx?$/,
        use: 'ts-loader',
        exclude: /node_modules/,
      },
      {
        test: /\.(scss)$/,
        use: [{
          loader: 'style-loader', // inject CSS to page
        }, {
          loader: 'css-loader', // translates CSS into CommonJS modules
        }, {
          loader: 'postcss-loader', // Run post css actions
          options: {
            postcssOptions: {
              plugins: [
                  require('autoprefixer')
                ]
            }
          }
        }, {
          loader: 'sass-loader' // compiles Sass to CSS
        }]
      },
    
    ],
  },
  resolve: {
    extensions: ['.ts', '.js', '.tsx', '.jsx'],
  },
  output: {
    filename: 'main.js',
    path: path.resolve(__dirname, 'public', 'dist'),
  },
  mode: 'production',
};
