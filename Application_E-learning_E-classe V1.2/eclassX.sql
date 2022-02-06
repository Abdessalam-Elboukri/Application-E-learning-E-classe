


CREATE TABLE `eclass` (
  `id` int(11) NOT NULL,
  `image` blob NOT NULL,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `enroll_n` int(20) NOT NULL,
  `date_a` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


-- Indexes for table `eclass`

ALTER TABLE `eclass`
  ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT for table `eclass`

ALTER TABLE `eclass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;


