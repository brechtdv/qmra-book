## ggplot2 statistical distributions

library(ggplot2)

ggdist <-
  function(fun, x, ylab, main, alpha = 1, ...) {
    args <- list(...)
    args_mx <- sapply(args, I)
    if (is.null(dim(args_mx))) args_mx <- t(args_mx)
    p <- ncol(args_mx)
    d <- nrow(args_mx)
    n <- length(x)
    
    y <- matrix(ncol = d, nrow = n)
    
    for (i in seq(ncol(y))) {
      y[, i] <- do.call(fun, c(list(x = x), as.list(args_mx[i, ])))
    }
    
    dlab <- paste0(main, "(",
                   apply(args_mx, 1, paste0, collapse = ","), ")")
    
    df <-
      data.frame(x = rep(x, d),
                 y = c(y),
                 d = factor(rep(dlab, each = n)))
    p <-
      ggplot(df, aes(x = x, y = y, col = d)) +
      geom_line(lwd = 1, alpha = alpha) +
      scale_y_continuous(ylab) +
      theme_bw() +
      theme(legend.title = element_blank())
    
    if (ylab == "probability")
      p <- p + scale_x_continuous("k", breaks = 0:max(x))
    
    p
  }